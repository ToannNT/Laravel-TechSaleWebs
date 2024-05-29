<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Catalog;

class CatalogComposer
{
    public function compose(View $view)
    {
        // Lấy tất cả các catalog
        $catalogs = Catalog::all();

        // Ghi log dữ liệu của catalog
        // dd($catalogs);
        // Chia sẻ dữ liệu với view
        $view->with('catalogs', $catalogs);
    }
}
