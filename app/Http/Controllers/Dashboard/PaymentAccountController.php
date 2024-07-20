<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\Finance\PaymentRepositoryInterface;

class PaymentAccountController extends Controller
{

    private $Payment;

    public function __construct(PaymentRepositoryInterface $Payment)
    {
        $this->Payment = $Payment;
    }
    public function index()
    {
        return $this->Payment->index();
    }

    public function show($id)
    {
        return $this->Payment->show($id);
    }

    public function create()
    {
        return $this->Payment->create();
    }


    public function store(Request $request)
    {
        return $this->Payment->store($request);
    }


    public function edit($id)
    {
        return $this->Payment->edit($id);
    }


    public function update(Request $request)
    {
        return $this->Payment->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Payment->destroy($request);
    }
}
