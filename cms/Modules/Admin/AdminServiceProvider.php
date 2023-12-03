<?php

namespace Cms\Modules\Admin;

use Cms\CmsServiceProvider;
use Cms\Modules\Admin\Middlewares\RedirectIfAuthenticated;
use Cms\Modules\Admin\Repositories\AdminAttributeRepository;
use Cms\Modules\Admin\Repositories\AdminBannerRepository;
use Cms\Modules\Admin\Repositories\AdminBlogRepository;
use Cms\Modules\Admin\Repositories\AdminCategoryRepository;
use Cms\Modules\Admin\Repositories\AdminCoinLogRepository;
use Cms\Modules\Admin\Repositories\AdminPaymentRepository;
use Cms\Modules\Admin\Repositories\AdminPetRepository;
use Cms\Modules\Admin\Repositories\AdminTopicRepository;
use Cms\Modules\Admin\Repositories\AdminUserRepository;
use Cms\Modules\Admin\Repositories\Contracts\AdminAttributeRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\AdminBannerRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\AdminBlogRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\AdminCategoryRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\AdminCoinLogRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\AdminPaymentRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\AdminPetRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\AdminTopicRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\AdminUserRepositoryContract;
use Cms\Modules\Admin\Services\AdminAttributeService;
use Cms\Modules\Admin\Services\AdminBannerService;
use Cms\Modules\Admin\Services\AdminBlogService;
use Cms\Modules\Admin\Services\AdminCategoryService;
use Cms\Modules\Admin\Services\AdminCoinLogService;
use Cms\Modules\Admin\Services\AdminPaymentService;
use Cms\Modules\Admin\Services\AdminPetService;
use Cms\Modules\Admin\Services\AdminTopicService;
use Cms\Modules\Admin\Services\AdminUserService;
use Cms\Modules\Admin\Services\Contracts\AdminAttributeServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminBannerServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminBlogServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminCategoryServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminCoinLogServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminPaymentServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminPetServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminTopicServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminUserServiceContract;
use Illuminate\Routing\Router;

class AdminServiceProvider extends CmsServiceProvider
{
    protected $routeMiddleware = [
        'admin.authenticated' => RedirectIfAuthenticated::class,
    ];

    public function boot(Router $router)
    {
        parent::boot($router);
    }

	public function register()
	{
        $this->app->bind(AdminUserRepositoryContract::class, AdminUserRepository::class);
        $this->app->bind(AdminUserServiceContract::class, AdminUserService::class);
        $this->app->bind(AdminCategoryRepositoryContract::class, AdminCategoryRepository::class);
        $this->app->bind(AdminCategoryServiceContract::class, AdminCategoryService::class);
        $this->app->bind(AdminAttributeRepositoryContract::class, AdminAttributeRepository::class);
        $this->app->bind(AdminAttributeServiceContract::class, AdminAttributeService::class);
        $this->app->bind(AdminPetRepositoryContract::class, AdminPetRepository::class);
        $this->app->bind(AdminPetServiceContract::class, AdminPetService::class);
        $this->app->bind(AdminBlogRepositoryContract::class, AdminBlogRepository::class);
        $this->app->bind(AdminBlogServiceContract::class, AdminBlogService::class);
        $this->app->bind(AdminTopicRepositoryContract::class, AdminTopicRepository::class);
        $this->app->bind(AdminTopicServiceContract::class, AdminTopicService::class);
        $this->app->bind(AdminBannerRepositoryContract::class, AdminBannerRepository::class);
        $this->app->bind(AdminBannerServiceContract::class, AdminBannerService::class);
        $this->app->bind(AdminPaymentRepositoryContract::class, AdminPaymentRepository::class);
        $this->app->bind(AdminPaymentServiceContract::class, AdminPaymentService::class);
        $this->app->bind(AdminCoinLogRepositoryContract::class, AdminCoinLogRepository::class);
        $this->app->bind(AdminCoinLogServiceContract::class, AdminCoinLogService::class);
	}
}

