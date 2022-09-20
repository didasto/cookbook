<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class ModelBaseTest extends TestCase
{
    protected array $models;
    private static bool $isInit = false;

    protected function setUp(): void
    {
        parent::setUp();
        $this->initDB();
        echo 'Run ModelBaseTest ...';
        $this->models = [];
        $path = app_path().'/Models';
        $this->getModels($path);
    }

    public function testFillableAndGuardsNotContainsSameElements(): void
    {
        foreach ($this->models as $model) {
            /** @var Model $modelInstance */
            $modelInstance = new $model();

            $guarded = $modelInstance->getGuarded();
            $fillable = $modelInstance->getFillable();
            $dublicates = array_intersect($guarded, $fillable);
            $this->assertCount(0, $dublicates, 'Guarded and fillable same values where not allowed in '.$modelInstance::class.' : '.json_encode($dublicates));
        }
    }

    public function testModelHasFactory(): void
    {
        foreach ($this->models as $model) {
            $result = $this->createModel($model);
            $this->assertSame((new $model())::class, $result::class, 'For '.$result::class.' was factory not found');
        }
    }

    public function testFillableAndGuardedAttributesExistsOnModel(): void
    {
        foreach ($this->models as $model) {
            $this->createModel($model);

            /** @var Model $modelInstance */
            $modelInstance = $model::query()->first();

            foreach ($modelInstance->getGuarded() as $attribute) {
                if ('*' === $attribute) {
                    continue;
                }
                $this->assertArrayHasKey($attribute, $modelInstance->getAttributes(), $modelInstance::class.' dont have attribute "'.$attribute.'" where found in guarded attribute list');
            }

            foreach ($modelInstance->getFillable() as $attribute) {
                if ('*' === $attribute) {
                    continue;
                }
                $this->assertArrayHasKey($attribute, $modelInstance->getAttributes(), $modelInstance::class.' dont have attribute "'.$attribute.'" where found in fillable attribute list');
            }
        }
    }

    public function testModelHasPrimaryKey(): void
    {
        foreach ($this->models as $model) {
            $modelInstance = $this->createModel($model);
            $this->assertNotEmpty($modelInstance->getKey(), $modelInstance::class.' dont have a primary key');
        }
    }

    public function testModelDontUseHasFactoryTrait(): void
    {
        foreach ($this->models as $model) {
            $modelInstance = $this->createModel($model);
            $this->assertTrue(!method_exists($modelInstance, 'factory'), $modelInstance::class.' use not allowed old factory trait');
        }
    }

    private function initDB(): void
    {
        if (!self::$isInit) {
            self::$isInit = true;
        }
    }

    private function getModels(string $path, array $out = []): array
    {
        $results = scandir($path);

        /** @var array<int, string> $results */
        foreach ($results as $result) {
            if ('.' === $result or '..' === $result) {
                continue;
            }
            $filename = $path.'/'.$result;
            if (is_dir($filename)) {
                $out = array_merge($out, $this->getModels($filename, $out));
            } else {
                $out[] = substr($filename, 0, -4);
            }
        }
        foreach ($out as $model) {
            $m = preg_replace('/(.*\/Models\/)(.*)/', 'App/Models/$2', $model);
            $this->models[] = preg_replace('/\//', '\\', $m);
        }
        $this->models = array_unique($this->models);

        return $out;
    }

    private function createModel(mixed $model): Model
    {
        $modelFactory = preg_replace('/(App\\\\Models\\\\)/', 'Database\Factories\\', $model).'Factory';

        /** @var Factory<Model> $modelFactory */
        $modelFactory = new $modelFactory();

        /** @var Model $freshModel */
        $freshModel = $modelFactory->create();

        return $freshModel;
    }
}
