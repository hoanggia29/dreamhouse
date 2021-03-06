<div class="south-search-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="advanced-search-form">
                    <!-- Search Title -->
                    <div class="search-title">
                        <p>Tìm kiếm tổ ấm riêng mình</p>
                    </div>
                    <!-- Search Form -->
                    <form action="{{ route('get.search') }}" method="get" id="advanceSearch">
                        <div class="row">

                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <input type="input" class="form-control" name="name" placeholder="Từ khóa">
                                </div>
                            </div>

                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <select class="form-control" id="cities" name="thanhpho">
                                        <option value="">Tất cả thành phố</option>
                                        @foreach($thanhpho as $key => $val)
                                            <option value="{{ $val->id }}">{{ $val->ten_tp }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <select class="form-control" id="catagories" name="loai">
                                        <option value="">Tất cả loại</option>
                                        @foreach($loai as $key => $val)
                                            <option value="{{ $val->id }}">{{ $val->ten_loaibds }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            

                            <!-- <div class="col-12 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <select class="form-control" id="offers">
                                        <option>Tất cả chiết khấu</option>
                                        <option>100% OFF</option>
                                        <option>75% OFF</option>
                                        <option>50% OFF</option>
                                        <option>25% OFF</option>
                                        <option>10% OFF</option>
                                    </select>
                                </div>
                            </div> 

                            <div class="col-12 col-md-4 col-xl-3">
                                <div class="form-group">
                                    <select class="form-control" id="listings">
                                        <option>Tất cả căn hộ</option>
                                        <option>Listings 1</option>
                                        <option>Listings 2</option>
                                        <option>Listings 3</option>
                                        <option>Listings 4</option>
                                    </select>
                                </div>
                            </div> -->

                            <div class="col-12 col-md-4 col-xl-2">
                                <div class="form-group">
                                    <select class="form-control" id="bedrooms" name="phongngu">
                                        <option value="">Phòng ngủ</option>
                                        @for($i = 0; $i <=10; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            
                            <!-- <div class="col-12 col-md-12 col-lg-12 col-xl-5 d-flex">
                                <div class="slider-range">
                                    <div data-min="120" data-max="820" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="120" data-value-max="820">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range">120 sq. ft - 820 sq. ft</div>
                                </div>

                                <div class="slider-range" style="min-width: 100%">
                                    <div data-min="10" data-max="1000" data-unit=" mét vuông" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1000">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range">10 mét vuông - 1000 mét vuông</div>
                                </div>
                            </div> -->

                            <div class="col-12 search-form-second-steps">
                                <div class="row">
                                    <div class=" col-md-10  row">
                                            <input type="hidden" name="tieuchi[]" value="0">
                                            @foreach($tieuchi as $key => $val)
                                            <div class="col-md-3 m-b-20">
                                                <input type="checkbox" name="tieuchi[]" value="{{ $val->id }}">
                                                <span>{{ $val->tentieuchi }}</span>
                                            </div>
                                            @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-between align-items-end">
                                <!-- More Filter -->
                                <div class="more-filter">
                                    <a href="#" id="moreFilter">+ More filters</a>
                                </div>
                                <!-- Submit -->
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn south-btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
