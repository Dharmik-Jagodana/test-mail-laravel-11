@extends($adminTheme)

@section('title','Mail')

@section('style')
<style type="text/css">
    .link{
        max-height: 100px;
    }
    .body{
        max-height: 150px;
    }
    label{
        margin-bottom: 0px !important;
    }
    .mail-panel-h3 {
        background-color: #4caf50;
        color: #fff;
        font-size: 24px;
        font-weight: bold;
        padding: 20px;
        border-radius: 8px;
        margin: 0;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .mail-panel-h3:hover {
        background-color: #388e3c;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }
</style>
@endsection

@section('content')
<main id="main" class="main">

    <div class="row mb-3">
        <div class="col-md-6">
            <div class="pagetitle mb-0 pt-1">
                <h1>Mail</h1>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('test.mail.send') }}" id="mailForm" autocomplete="off" class="form-class">
                @csrf

                <input type="hidden" name="button_value" id="buttonValue" value="">

                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label custom-label">Title :</label>
                            <input id="title" type="text" class="form-control title" name="title" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label custom-label">E-Mail :</label><span class="text-danger">*</span>
                            <input id="email" type="text" class="form-control email" name="email" placeholder="Enter Email">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label custom-label">Body Message :</label>
                            <input id="body" type="textarea" class="form-control body" name="body" placeholder="Enter Body Message">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label custom-label">Link :</label>
                            <input id="link" type="textarea" class="form-control link" name="link" placeholder="Enter Link">
                        </div>
                    </div>
                </div>

                <div class="add-more-table mt-3">
                    <h3 class="mail-panel-h3">Table Data</h3>
                    <div class="row append mt-2">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label custom-label">Name :</label>
                                <input id="name" type="text" class="form-control name" name="info[1][name]" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label custom-label">Post :</label>
                                <input id="post" type="text" class="form-control post" name="info[1][post]" placeholder="Enter Post">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label custom-label">Contact :</label>
                                <input id="phone" type="text" class="form-control phone" name="info[1][phone]" placeholder="Enter Contact">
                            </div>
                        </div>
                        <div class="col-md-2 mt-4">
                            <button type="button" class="btn btn-primary add-btn">+</button>
                        </div>
                    </div>
                </div>


                <hr>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" value="1"><i class="fa fa-save"></i> Mail 1</button>
                        <button type="submit" class="btn btn-primary" value="2"><i class="fa fa-save"></i> Mail 2</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

@section('script')
<script type="text/javascript">
    $(document).on('click', '.add-btn', function() {
        var key = $('.append').length + 1;
        html = '<div class="row append mt-2"><div class="col-md-3"><div class="form-group"><input type="text" name="info['+ key +'][name]" class="form-control name" placeholder="Name"></div></div><div class="col-md-3"><div class="form-group"><input type="text" name="info['+ key +'][post]" class="form-control post" placeholder="post"></div></div><div class="col-md-3"><div class="form-group"><input type="text" name="info['+ key +'][phone]" class="form-control phone" placeholder="Contact"></div></div><div class="col-md-2"><button type="button" class="btn btn-danger delete-btn">-</button></div></div>';

        $('.add-more-table').append(html);
    });

    $(document).on('click', '.delete-btn', function() {
        $(this).parents('.append').remove();
    });

    $(document).on('click', '[type="submit"]', function() {
        var buttonValue = $(this).val();
        $('#buttonValue').val(buttonValue);
    });
</script>
@endsection