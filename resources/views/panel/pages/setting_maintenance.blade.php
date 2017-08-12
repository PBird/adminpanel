@extends('panel.layouts.master')

@section('extracss')

  <style type="text/css">

        .form-group
        {

            width: 55%;
            margin:2% auto;

        }
        button {
            width: 25%;
            margin:10px auto;

        }
         label {
          width: 50%;
          margin: 1% auto;
        }

  </style>

@endsection('extracss')

@section('content')

@include('panel.layouts.nav')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

@include('panel.layouts.errors')
@include('panel.layouts.confirm')
                        <div class="form-group">



                             <form method="post" action="{{route('MaintenanceMode.set')}}">
                             {{csrf_field()}}

                                            <label>Maintenance Mode</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="maintenance" id="on" value="1" onclick="check()"   checked=""> On
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="maintenance" id="off" onclick="check()" value="0" @if(!$check) checked @endif > Off
                                                </label>
                                            </div>
                                            <button type="submit" id="button" class="btn btn-primary"> Save </button>

                            </form>


                            </div>



                            @if($check)
                               <label>Maintenance link : </label>


                                    <input class="form-control" type="text" id="copyTarget"  value="{{$maintenance_link}}" > </td>

                                    <button id="copyButton" class="btn btn-default"  > Copy </button>  </td>

                          @endif



                         </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


@endsection('content')

@section('exscripts')


<script type="text/javascript">

status = document.getElementById('on').checked ? 'on' : 'off';
button = document.getElementById('button');
check();
function check() {

  laststatus = document.getElementById('on').checked ? 'on' : 'off';

  if(laststatus == status)
   { button.className = "btn btn-primary disabled";
       button.disabled = true;
     }
  else
   { button.className = "btn btn-primary";
     button.disabled = false;}


}


// copy clipboard

document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});

function copyToClipboard(elem) {
    // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);

    // copy the selection
    var succeed;
    try {
        succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }

    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}



</script>






@endsection('exscripts')