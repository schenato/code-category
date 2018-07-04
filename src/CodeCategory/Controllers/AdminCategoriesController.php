<?php

namespace CodePress\CodeCategory\Controllers;

use CodePress\CodeCategory\Models\Category;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

/**
 * Description of AdminCategoriesController
 *
 * @author gabriel
 */
class AdminCategoriesController extends Controller
{

    private $response;
    private $category;
    
    public function __construct(ResponseFactory $response, Category $category)
    {
        $this->category = $category;
        $this->response = $response;
    }
    
    public function index()
    {
        $categories = $this->category->all();
        return $this->response->view('codecategory::index', compact('categories'));
    }
    
    public function create()
    {
        $categories = $this->category->all();
        return view('codecategory::create', compact('categories'));
    }
    
    public function store(Request $request)
    {
        $this->category->create($request->all());
        
        return redirect()->route('admin.categories.index');
    }
}
