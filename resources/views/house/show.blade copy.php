@extends('layouts.backend')
 
@section('content')

<main>

<!-- <div class="row row-cols-1 row-cols-md-3 mb-3 text-center m-4">
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Basic</h4>
            </div>
            <div class="card-body">
            @foreach ($pumps3 as $pump3)
                <div class="font-bold text-3xl"> {{ $pump3->name }}  </div>
                    <h1 class="card-title pricing-card-title">{{ $pump3->name }}<small class="text-muted fw-light"> zł</small></h1>
                    <img src="https://grzejnikisklep.eu/userdata/public/assets//hyundai_monoblok_do%20opisu.png" alt="">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>
                            <div class="row my-2">
                            <div class="col-md-6 text-start">Temperatura biwalentna:</div>
                            <div class="col-md-6 text-start font-bold">{{ $pump3->tempBiwa }}</div>
                            </div>
                        </li>
                        <li>
                            <div class="row my-2">
                            <div class="col-md-6 text-start ">Moc przy temp -7:</div>
                            <div class="col-md-6 text-start font-bold">{{ $pump3->power35 }}</div>
                            </div>
                        </li>
                        <li>
                            <div class="row my-2">
                            <div class="col-md-6 text-start">Głosność:</div>
                            <div class="col-md-6 text-start font-bold">{{ $pump3->volume }}</div>
                            </div>
                        </li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg border-4 border-green-500 hover:bg-green-500 font-bold">{{ $pump3->price }}
                        <small class="font-bold"> zł</small>
                    </button>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-green-500">
        <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Standard</h4>
            </div>
            <div class="card-body">
            @foreach ($pumps2 as $pump2)
                <div class="font-bold text-3xl"> {{ $pump2->name }}  </div>
                    <h1 class="card-title pricing-card-title">{{ $pump2->price }}<small class="text-muted fw-light"> zł</small></h1>
                    <img src="https://grzejnikisklep.eu/userdata/public/assets//hyundai_monoblok_do%20opisu.png" alt="">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>
                            <div class="row my-2">
                            <div class="col-md-6 text-start">Temperatura biwalentna:</div>
                            <div class="col-md-6 text-start font-bold">{{ $pump2->tempBiwa }}</div>
                            </div>
                        </li>
                        <li>
                            <div class="row my-2">
                            <div class="col-md-6 text-start ">Moc przy temp -7:</div>
                            <div class="col-md-6 text-start font-bold">{{ $pump2->power35 }}</div>
                            </div>
                        </li>
                        <li>
                            <div class="row my-2">
                            <div class="col-md-6 text-start">Głosność:</div>
                            <div class="col-md-6 text-start font-bold">{{ $pump2->volume }}</div>
                            </div>
                        </li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg border-4 border-green-500 hover:bg-green-500 font-bold">{{ $pump2->price }}
                        <small class="font-bold"> zł</small>
                    </button>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-green-500">
            <div class="card-header py-3 text-white bg-green-500 border-primary">
                <h4 class="my-0 fw-normal">Pro</h4>
            </div>
            <div class="card-body">
            @foreach ($pumps1 as $pump1)
                <div class="font-bold text-3xl"> {{ $pump1->name }}  </div>
                    <h1 class="card-title pricing-card-title">{{ $pump1->price }}<small class="text-muted fw-light"> zł</small></h1>
                    <img src="https://grzejnikisklep.eu/userdata/public/assets//hyundai_monoblok_do%20opisu.png" alt="">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>
                            <div class="row my-2">
                            <div class="col-md-6 text-start">Temperatura biwalentna:</div>
                            <div class="col-md-6 text-start font-bold">{{ $pump1->tempBiwa }}</div>
                            </div>
                        </li>
                        <li>
                            <div class="row my-2">
                            <div class="col-md-6 text-start ">Moc przy temp -7:</div>
                            <div class="col-md-6 text-start font-bold">{{ $pump1->power35 }}</div>
                            </div>
                        </li>
                        <li>
                            <div class="row my-2">
                            <div class="col-md-6 text-start">Głosność:</div>
                            <div class="col-md-6 text-start font-bold">{{ $pump1->volume }}</div>
                            </div>
                        </li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg border-4 border-green-500 hover:bg-green-500 font-bold">{{ $pump1->price }}
                        <small class="font-bold"> zł</small>
                    </button>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div> -->
<div class="row w-full">
    <h2 class="display-6 text-center mb-4">Kategorie pomp ciepła</h2>
    <div class="table-responsive">
    <table class="table text-center">
        <thead>
          <tr>
            <!-- <th style="width: 34%;"></th> -->
            <th style="width: 22%;">Basic</th>
            <th style="width: 22%;">Standard</th>
            <th style="width: 22%;">Pro</th>
          </tr>
        </thead>
        <!-- <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
        </tbody> -->

        <tbody>
          <tr>
            <!-- <th scope="row" class="text-start">Permissions</th> -->
            <td>najtańszy</td>
            <td>chiński</td>
            <td>przedzial cenowy</td>
          </tr>
          <tr>
            <!-- <th scope="row" class="text-start">Sharing</th> -->
            <td>średni</td>
            <td>szwedzki</td>
            <td>przedział cenowy</td>
          </tr>
          <tr>
            <!-- <th scope="row" class="text-start">Unlimited members</th> -->
            <td>najdroższy</td>
            <td>niemiecki</td>
            <td>przedział cenowy</td>
          </tr>
        </tbody>
    </table>
    </div>
</div>
</main>
@endsection