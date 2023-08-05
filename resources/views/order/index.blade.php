{{-- <x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card">
                        <div class="card-body ">
                            <a href="{{ route('order.create') }}" class="btn btn-primary p-6">Order</a>
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <th scope="row">{{ $no }}</th>
                                            <td>
                                                @foreach ($order->OrderDetail as $nama)
                                                    <li>{{ $nama->product->name }}</li>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($order->OrderDetail as $harga)
                                                    <li>{{ $harga->product->price }}</li>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($order->OrderDetail as $qty)
                                                    <li>{{ $qty->qty }}</li>
                                                @endforeach
                                            </td>
                                            <td>
                                                <?php $jumlahTotalBayar = 0; ?>
                                                @foreach ($order->OrderDetail as $jumlah)
                                                    <li>{{ $jumlah->harga }}</li>
                                                    <?php $jumlahTotalBayar += $jumlah->harga; ?>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <td colspan="4">Total Bayar :</td>
                                        <td>{{ $jumlahTotalBayar }}</td>
                                        <?php $no++; ?>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout> --}}

@extends('layouts/app')
@section('konten')

<!-- Column Sizing -->
<div class="card card-default">
  <div class="card-header">
    <h2>Pemesanan</h2>
  </div>
  <div class="card-body">
    <form>
      <div class="form-group">
        <h5>Makanan</h5>
        <div class="form-row align-items-center">
          <div class="col-3">
            <label for="makanan">Pilih Makanan:</label>
            <select class="form-control rounded-0 bg-light" id="makanan">
              <option>Rawon</option>
              <option>Pecel</option>
              <option>Sop Buntut</option>
              <option>Gudeg</option>
              <option>Rendang</option>
            </select>
          </div>
          <div class="col-1">
            <label for="jumlah_makanan">Jumlah:</label>
            <input type="number" class="form-control" id="jumlah_makanan">
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-secondary btn-pill mt-6">Tambahkan</button>
          </div>
        </div>
      </div>
  
      <div class="form-group">
        <h5>Minuman</h5>
        <div class="form-row align-items-center">
          <div class="col-3">
            <label for="minuman">Pilih Minuman:</label>
            <select class="form-control rounded-0 bg-light" id="minuman">
              <option>Es Teh</option>
              <option>Es Jeruk</option>
              <option>Es Gud Day</option>
              <option>Teh Anget</option>
              <option>Kopi</option>
            </select>
          </div>
          <div class="col-1">
            <label for="jumlah_minuman">Jumlah:</label>
            <input type="number" class="form-control" id="jumlah_minuman">
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-secondary btn-pill mt-6">Tambahkan</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  
</div>


     <!-- Table Product -->
<div class="row">
  <div class="col-12">
    <div class="card card-default">
      <div class="card-header">
        <h2>Riwayat Pemesanan</h2>
      </div>
      <div class="card-body">
        <table id="productsTable" class="table table-hover table-product" style="width:100%">
          <thead>
            <tr>
              <th></th>
              <th>Product Name</th>
              <th>ID</th>
              <th>Qty</th>
              <th>Variants</th>
              <th>Committed</th>
              <th>Daily Sale</th>
              <th>Sold</th>
              <th>In Stock</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-01.jpg" alt="Product Image">
              </td>
              <td>Coach Swagger</td>
              <td>24541</td>
              <td>27</td>
              <td>1</td>
              <td>2</td>
              <td>
                <div id="tbl-chart-01"></div>
              </td>
              <td>4</td>
              <td>18</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-02.jpg" alt="Product Image">
              </td>
              <td>Toddler Shoes, Gucci Watch</td>
              <td>24542</td>
              <td>18</td>
              <td>7</td>
              <td>5</td>
              <td>
                <div id="tbl-chart-02"></div>
              </td>
              <td>1</td>
              <td>14</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-03.jpg" alt="Product Image">
              </td>
              <td>Hat Black Suits</td>
              <td>24543</td>
              <td>20</td>
              <td>3</td>
              <td>7</td>
              <td>
                <div id="tbl-chart-03"></div>
              </td>
              <td>6</td>
              <td>26</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-04.jpg" alt="Product Image">
              </td>
              <td>Backpack Gents</td>
              <td>24544</td>
              <td>37</td>
              <td>8</td>
              <td>3</td>
              <td>
                <div id="tbl-chart-04"></div>
              </td>
              <td>6</td>
              <td>7</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-05.jpg" alt="Product Image">
              </td>
              <td>Speed 500 Ignite</td>
              <td>24545</td>
              <td>8</td>
              <td>3</td>
              <td>4</td>
              <td>
                <div id="tbl-chart-05"></div>
              </td>
              <td>8</td>
              <td>42</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-06.jpg" alt="Product Image">
              </td>
              <td>Olay</td>
              <td>24546</td>
              <td>19</td>
              <td>6</td>
              <td>6</td>
              <td>
                <div id="tbl-chart-06"></div>
              </td>
              <td>79</td>
              <td>12</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-07.jpg" alt="Product Image">
              </td>
              <td>Ledger Nano X</td>
              <td>24547</td>
              <td>61</td>
              <td>46</td>
              <td>18</td>
              <td>
                <div id="tbl-chart-07"></div>
              </td>
              <td>76</td>
              <td>36</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-08.jpg" alt="Product Image">
              </td>
              <td>Surface Laptop 2</td>
              <td>24548</td>
              <td>33</td>
              <td>56</td>
              <td>89</td>
              <td>
                <div id="tbl-chart-08"></div>
              </td>
              <td>38</td>
              <td>5</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-09.jpg" alt="Product Image">
              </td>
              <td>TIGI Bed Head Superstar Queen</td>
              <td>24549</td>
              <td>3</td>
              <td>9</td>
              <td>15</td>
              <td>
                <div id="tbl-chart-09"></div>
              </td>
              <td>6</td>
              <td>46</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-10.jpg" alt="Product Image">
              </td>
              <td>Wattbike Atom</td>
              <td>24550</td>
              <td>61</td>
              <td>56</td>
              <td>68</td>
              <td>
                <div id="tbl-chart-10"></div>
              </td>
              <td>3</td>
              <td>19</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-11.jpg" alt="Product Image">
              </td>
              <td>Smart Watch</td>
              <td>24551</td>
              <td>19</td>
              <td>76</td>
              <td>38</td>
              <td>
                <div id="tbl-chart-11"></div>
              </td>
              <td>3</td>
              <td>17</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-12.jpg" alt="Product Image">
              </td>
              <td>Magic Bullet Blender</td>
              <td>24552</td>
              <td>12</td>
              <td>30</td>
              <td>14</td>
              <td>
                <div id="tbl-chart-12"></div>
              </td>
              <td>26</td>
              <td>9</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-13.jpg" alt="Product Image">
              </td>
              <td>Kanana rucksack</td>
              <td>24553</td>
              <td>14</td>
              <td>65</td>
              <td>39</td>
              <td>
                <div id="tbl-chart-13"></div>
              </td>
              <td>9</td>
              <td>55</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-14.jpg" alt="Product Image">
              </td>
              <td>Copic Opaque White</td>
              <td>24554</td>
              <td>43</td>
              <td>29</td>
              <td>75</td>
              <td>
                <div id="tbl-chart-14"></div>
              </td>
              <td>7</td>
              <td>15</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="py-0">
                <img src="/assets/images/products/products-xs-15.jpg" alt="Product Image">
              </td>
              <td>Headphones</td>
              <td>24555</td>
              <td>17</td>
              <td>6</td>
              <td>7</td>
              <td>
                <div id="tbl-chart-15"></div>
              </td>
              <td>6</td>
              <td>98</td>
              <td>
                <div class="dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>



          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
@endsection

