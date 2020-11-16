<div class="footer">
    <div class="container-fluid" id="ft">
        <div class="row" id="row-ft">
            @foreach ($footer as $ft)
                <div class="col-lg-3 col-md-3 col-sm-3">
                        <img src="{{Storage::url('public/img/').$ft->img_footer}}" alt="video_footer" type="image/gif" id="img-footer">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h3 id="p-ft1"><strong>About Us</strong></h3>
                    <p id="p-ft2">{{$ft->about_us}}</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h3 id="p-ft1"><strong>Address</strong></h3>
                    <p id="p-ft2">{{$ft->address}}</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h3 id="p-ft1"><strong>Contact Us</strong></h3>
                    <p id="p-ft2">{{$ft->contact_us}}</p>
                </div>
            @endforeach
        </div>
        <p id="p-ft3" class="text-center">Copyright &copy; School Of Science & Arts 2020</p>
    </div>
</div>
