<?php

namespace Pyz\Yves\TrainingPage;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class TrainingPageDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_TRAINING = 'CLIENT_TRAINING';
    public const CLIENT_STORE = 'CLIENT_STORE';

    public function provideDependencies(Container $container): Container
    {
        $this->addStoreClient($container);
        return $this->addTrainingClient($container);
    }

    protected function addTrainingClient(Container $container): Container
    {
        $container->set(static::CLIENT_TRAINING, function (Container $container) {
            return $container->getLocator()->training()->client();
        });

        return $container;
    }

    protected function addStoreClient(Container $container)
    {
        $container->set(static::CLIENT_STORE, function (Container $container) {
            return $container->getLocator()->store()->client();
        });

        return $container;
    }
}
