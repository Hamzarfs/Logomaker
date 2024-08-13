<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Font;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $userCount = User::count();
        $RoleCount = Role::count();
        $PermissionCount = Permission::count();
        $CategoryCount = Category::count();
        $SubCategoryCount = SubCategory::count();
        $CollectionCount = Collection::count();
        $ProductCount = Product::count();
        $OrdersCount = Order::count();
        $FontsCount = Font::count();

        view()->share(compact(
            'userCount',
            'RoleCount',
            'PermissionCount',
            'CategoryCount',
            'SubCategoryCount',
            'CollectionCount',
            'ProductCount',
            'OrdersCount',
            'FontsCount',
        ));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
