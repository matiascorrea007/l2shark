@foreach($videos as $video)
<div class="modal fade" id="video-{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div>
                                <iframe width="560" height="360" src="{{$video->link}}" frameborder="10" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endforeach