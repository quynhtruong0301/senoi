<?php

namespace Cms\Modules\Core;

use Cms\CmsServiceProvider;
use Cms\Modules\Core\Repositories\Contracts\CoreContactRepositoryContract;
use Cms\Modules\Core\Repositories\CoreBannerRepository;
use Cms\Modules\Core\Repositories\CoreBlogRepository;
use Cms\Modules\Core\Repositories\CoreCoinLogRepository;
use Cms\Modules\Core\Repositories\CoreContactRepository;
use Cms\Modules\Core\Repositories\CorePaymentRepository;
use Cms\Modules\Core\Repositories\CoreTopicRepository;
use Cms\Modules\Core\Repositories\Contracts\CoreBannerRepositoryContract;
use Cms\Modules\Core\Repositories\Contracts\CoreBlogRepositoryContract;
use Cms\Modules\Core\Repositories\Contracts\CoreCoinLogRepositoryContract;
use Cms\Modules\Core\Repositories\Contracts\CorePaymentRepositoryContract;
use Cms\Modules\Core\Repositories\Contracts\CoreTopicRepositoryContract;
use Cms\Modules\Core\Services\Contracts\CoreContactServiceContract;
use Cms\Modules\Core\Services\CoreBannerService;
use Cms\Modules\Core\Services\CoreBlogService;
use Cms\Modules\Core\Services\CoreCoinLogService;
use Cms\Modules\Core\Services\CoreContactService;
use Cms\Modules\Core\Services\CorePaymentService;
use Cms\Modules\Core\Services\CoreTopicService;
use Cms\Modules\Core\Services\Contracts\CoreBannerServiceContract;
use Cms\Modules\Core\Services\Contracts\CoreBlogServiceContract;
use Cms\Modules\Core\Services\Contracts\CoreCoinLogServiceContract;
use Cms\Modules\Core\Services\Contracts\CorePaymentServiceContract;
use Cms\Modules\Core\Services\Contracts\CoreTopicServiceContract;
use Cms\Modules\Core\Commands\CmsCreateModuleCommand;
use Cms\Modules\Core\Commands\CmsSetupCommand;
use Cms\Modules\Core\Repositories\Contracts\CoreAttributeRepositoryContract;
use Cms\Modules\Core\Repositories\Contracts\CoreCategoryRepositoryContract;
use Cms\Modules\Core\Repositories\Contracts\CorePetRepositoryContract;
use Cms\Modules\Core\Repositories\Contracts\CoreUserRepositoryContract;
use Cms\Modules\Core\Repositories\CoreAttributeRepository;
use Cms\Modules\Core\Repositories\CoreCategoryRepository;
use Cms\Modules\Core\Repositories\CorePetRepository;
use Cms\Modules\Core\Repositories\CoreUserRepository;
use Cms\Modules\Core\Services\Contracts\CoreAttributeServiceContract;
use Cms\Modules\Core\Services\Contracts\CoreCategoryServiceContract;
use Cms\Modules\Core\Services\Contracts\CoreFileServiceContract;
use Cms\Modules\Core\Services\Contracts\CorePetServiceContract;
use Cms\Modules\Core\Services\Contracts\CoreUserServiceContract;
use Cms\Modules\Core\Services\CoreAttributeService;
use Cms\Modules\Core\Services\CoreCategoryService;
use Cms\Modules\Core\Services\CoreFileService;
use Cms\Modules\Core\Services\CorePetService;
use Cms\Modules\Core\Services\CoreUserService;
use Illuminate\Routing\Router;

class CoreServiceProvider extends CmsServiceProvider
{
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    /**
     * Bootstrap services.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);

        // COMMAND REGISTER
        if ($this->app->runningInConsole()) {
            $this->commands([
                CmsCreateModuleCommand::class,
                CmsSetupCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->app->bind(CoreFileServiceContract::class, CoreFileService::class);
        $this->app->bind(CoreUserRepositoryContract::class, CoreUserRepository::class);
        $this->app->bind(CoreUserServiceContract::class, CoreUserService::class);
        $this->app->bind(CoreCategoryRepositoryContract::class, CoreCategoryRepository::class);
        $this->app->bind(CoreCategoryServiceContract::class, CoreCategoryService::class);
        $this->app->bind(CorePetRepositoryContract::class, CorePetRepository::class);
        $this->app->bind(CorePetServiceContract::class, CorePetService::class);
        $this->app->bind(CoreAttributeRepositoryContract::class, CoreAttributeRepository::class);
        $this->app->bind(CoreAttributeServiceContract::class, CoreAttributeService::class);
        $this->app->bind(CoreBlogRepositoryContract::class, CoreBlogRepository::class);
        $this->app->bind(CoreBlogServiceContract::class, CoreBlogService::class);
        $this->app->bind(CoreTopicRepositoryContract::class, CoreTopicRepository::class);
        $this->app->bind(CoreTopicServiceContract::class, CoreTopicService::class);
        $this->app->bind(CoreBannerRepositoryContract::class, CoreBannerRepository::class);
        $this->app->bind(CoreBannerServiceContract::class, CoreBannerService::class);
        $this->app->bind(CorePaymentRepositoryContract::class, CorePaymentRepository::class);
        $this->app->bind(CorePaymentServiceContract::class, CorePaymentService::class);
        $this->app->bind(CoreCoinLogRepositoryContract::class, CoreCoinLogRepository::class);
        $this->app->bind(CoreCoinLogServiceContract::class, CoreCoinLogService::class);
        $this->app->bind(CoreContactRepositoryContract::class, CoreContactRepository::class);
        $this->app->bind(CoreContactServiceContract::class, CoreContactService::class);
    }
}
