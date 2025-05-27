<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Daftar kebijakan (policy) aplikasi.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Daftarkan layanan otentikasi/otorisasi.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
