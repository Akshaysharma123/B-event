 <div class="alert alert-icon-left alert-{{$type or 'success'}} alert-dismissible mb-2" role="alert">
                            <span class="alert-icon"><i class="la la-{{$title or 'check-circle-o'}}"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            {{$slot}}
                          </div>