<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList()
    {
        $orders = Order::all();
        return View('admin.orders.orderList', [
            'data' => $orders
        ]);
    }
    public function orderAdd()
    {
        return View('admin.orders.orderAdd');
    }

    public function storeOrder(Request $request)
    {
        Order::create([
            'productName' => $request->productName,
            'unitPrice' => $request->unitPrice,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
            'deliveryDate' => $request->deliveryDate,
            'status' => $request->status
        ]);
        return redirect(route('orders.allOrder'));
    }
    public function destroy($id)
    {
        $singleOrder = Order::find($id);
        $singleOrder->delete();
        return redirect()->route('orders.allOrder');
    }


    public function orderEdit($id)
    {
        $orders = Order::find($id);
        return view('admin.orders.orderEdit', compact('orders'));
    }
    public function update(Request $request, $id)
    {
        $requestData = [
            'productName' => $request->productName,
            'unitPrice' => $request->unitPrice,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
            'deliveryDate' => $request->deliveryDate,
            'status' => $request->status,
        ];

        $orders = Order::find($id);
        $orders->update($requestData);

        $message['message'] = 'Order successfully updated';
        $message['icon'] = 'success';
        $message['type'] = 'success';

        return redirect()->route('orders.allOrder')->withMessage($message);
    }
}
