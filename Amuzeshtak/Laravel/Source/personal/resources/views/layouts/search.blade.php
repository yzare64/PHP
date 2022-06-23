<div class="col-md-12" dir="ltr">
    <form action="{{route('index')}}" method="get">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button type="submit" class="btn btn-primary btn-sm input-group-text" id="inputGroup-sizing-default">جستجو</button>
            </div>
            <input dir="rtl" value="{{request()->query('search')}}" name="search" type="text" class="border-0 border-bottom form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="جستجو کنید">
        </div>
    </form>
    </div>
