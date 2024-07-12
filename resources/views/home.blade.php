@extends('layouts.app')

@section('content')
@include('layouts.shared.header')
<!-- <div class=" px-5 transition-all  duration-150 ">
    <div class="grid grid-cols-12 gap-x-6">
        <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
                <div class="box-body">
                    <div class="flex">
                        <div>
                            <p class="font-medium mb-1 text-textmuted">Total Orders</p>
                            <h4 class="mb-0 font-medium">$18,645</h4> </div>
                        <div class="avatar avatar-lg rounded-md  ms-auto">
                            <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-primary-gradient"> <i class="bi bi-cart-check text-[1.2rem] !text-white"></i> </div>
                        </div>
                    </div>
                    <div class="flex mt-2"> <span class="badge !text-primary !text-xs bg-primary/10 !rounded-full">+24% <i class="fe fe-arrow-down !text-[0.75rem]"></i></span> <a href="javascript:void(0);" class="text-textmuted ms-auto underline mt-auto">view more</a> </div>
                </div>
            </div>
        </div>
        <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
                <div class="box-body">
                    <div class="flex">
                        <div>
                            <p class="font-medium mb-1 text-textmuted">Total Expenses</p>
                            <h4 class="mb-0 font-medium">$73,579</h4> </div>
                        <div class="avatar avatar-lg rounded-md ms-auto">
                            <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-danger-gradient"> <i class="bi bi-currency-dollar text-[1.2rem] !text-white"></i> </div>
                        </div>
                    </div>
                    <div class="flex mt-2"> <span class="badge  bg-danger/10 !text-danger !text-xs !rounded-full">+10% <i class="fe fe-arrow-up !text-[0.75rem]"></i></span> <a href="javascript:void(0);" class="text-textmuted  ms-auto underline mt-auto">view more</a> </div>
                </div>
            </div>
        </div>
        <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
                <div class="box-body">
                    <div class="flex">
                        <div>
                            <p class="font-medium mb-1 text-textmuted">Total Sales</p>
                            <h4 class="mb-0 font-medium">$34,876</h4> </div>
                        <div class="avatar avatar-lg rounded-md  ms-auto">
                            <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-success-gradient"> <i class="bi bi-archive text-[1.2rem] !text-white"></i> </div>
                        </div>
                    </div>
                    <div class="flex mt-2"> <span class="badge !text-success !text-xs bg-success/10 !rounded-full">+0.26% <i class="fe fe-arrow-down !text-[0.75rem]"></i></span> <a href="javascript:void(0);" class="text-textmuted  ms-auto underline mt-auto">view more</a> </div>
                </div>
            </div>
        </div>
        <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
                <div class="box-body">
                    <div class="flex">
                        <div>
                            <p class="font-medium text-textmuted mb-1">Total Products</p>
                            <h4 class="mb-0 font-medium">26,231</h4> </div>
                        <div class="avatar avatar-lg rounded-md ms-auto">
                            <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-warning-gradient"> <i class="bi bi-handbag text-[1.2rem] !text-white"></i> </div>
                        </div>
                    </div>
                    <div class="flex mt-2"> <span class="badge bg-warning/10 !text-warning  !text-xs !rounded-full">+06% <i class="fe fe-arrow-down !text-[0.75rem]"></i></span> <a href="javascript:void(0);" class="text-textmuted  ms-auto underline mt-auto">view more</a> </div>
                </div>
            </div>
        </div>
    </div>

</div> -->
<div class="container mx-auto p-8 flex justify-center items-center">
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-4 md:col-span-12 lg:col-span-12 col-span-12">
            <div class="box overflow-hidden">
                <div class="box-header !border-b-0 !pb-1 text-center">
                    <h4 class="box-title mb-2">Chart title goes here</h4>
                    <p class="text-[.75rem] mb-0 text-textmuted font-normal">Chart title goes here</p>
                </div>
                <div class="box-body !p-0 !py-4 overflow-hidden">
                    <div class="flex  justify-center">
                        <canvas id="stackedArea"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:col-span-4 md:col-span-12 lg:col-span-12 col-span-12">
            <div class="box overflow-hidden">
                <div class="box-header !border-b-0 !pb-1 text-center">
                    <h4 class="box-title mb-2">Chart title goes here</h4>
                    <p class="text-[.75rem] mb-0 text-textmuted font-normal">Chart title goes here</p>
                </div>
                <div class="box-body !p-0 overflow-hidden">
                    <div class="flex  flex-col justify-center">
                        <div class="flex justify-center items-center " style="width:100%;padding: 0 13%;"><canvas id="myChart" width="200" height="200"></canvas></div>
                        
                        <div class="flex justify-center ">
                            <div class="pagination">
                                <span class="pagination-bullet active" data-slide="0"></span>
                                <span class="pagination-bullet" data-slide="1"></span>
                                <span class="pagination-bullet" data-slide="2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="xl:col-span-4 md:col-span-12 lg:col-span-12 col-span-12">
                    <div class="box overflow-hidden">
                        <div class="box-header !border-b-0 !pb-1 text-center">
                            <h4 class="box-title mb-2">Chart title goes here</h4>
                            <p class="text-[.75rem] mb-0 text-textmuted font-normal">Chart title goes here</p>
                        </div>
                        <div class="box-body !p-0 !py-4 overflow-hidden">
                            <div class="flex  justify-center">
                            <canvas id="multiLineChart"></canvas>
                            </div>
                        </div>
                    </div>
        </div>
       
   
   
    </div>
</div>
@endsection
