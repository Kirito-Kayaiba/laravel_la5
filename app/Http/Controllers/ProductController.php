<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $arr = ['status' => true,
            'message' => 'Danh Sách Sản Phẩm',
            'data' => ProductResource::collection($products)
        ];
        return response()->json($arr, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,
            [
                'tenSP' => 'required',
                'gia' => 'required',
            ]
        );
        if ($validator->fails()) {
            $arr = ['success' => false,
                'message' => 'Lỗi Kiểm Thử Dữ Liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $product = Product::create($input);
        $arr = ['status' => true,
            'message' => 'Thêm Dữ Liệu Thành Công',
            'data' => new ProductResource($product)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $product = Product::find($id);
         if(is_null($product)){
             $arr = ['status' => false,
                 'message' => 'Không Tìm Thấy Dữ Liệu',
                 'data' => null
             ];
             return response()->json($arr, 200);
         }
            $arr = ['status' => true,
                'message' => 'Chi Tiết Sản Phẩm',
                'data' => new ProductResource($product)
            ];
            return response()->json($arr, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        $validator = Validator::make($input,
            [
                'tenSP' => 'required',
                'gia' => 'required',
            ]
        );
        if ($validator->fails()) {
            $arr = ['success' => false,
                'message' => 'Lỗi Kiểm Thử Dữ Liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $product->tenSP = $input['tenSP'];
        $product->gia = $input['gia'];
        $product->save();
        $arr = ['status' => true,
            'message' => 'Cập Nhật Dữ Liệu Thành Công',
            'data' => new ProductResource($product)
        ];
        return response()->json($arr, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $arr = ['status' => true,
            'message' => 'Xóa Dữ Liệu Thành Công',
            'data' => new ProductResource($product)
        ];
        return response()->json($arr, 200);
    }
}
