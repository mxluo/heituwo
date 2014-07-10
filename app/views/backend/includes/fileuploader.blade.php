        <div class="modal fade" id="model-file-uploader">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">上传文件</h4>
                    </div>
                    
                    <div class="modal-body">
                        <div class="uploader">
                            <!--用来存放文件信息-->
                            <div id="uploader-file-list" class="uploader-list"></div>
                            <div class="btns">
                                <div id="uploader-picker-signle" class="btn btn-default">选择文件</div>
                                <button id="uploader-remove" class="btn btn-danger hidden">移除</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default close-uploader-model" data-dismiss="modal">取消</button>
                        <button id="uploader-ctlBtn" class="btn btn-info">开始上传</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('/backend/js/webuploader.html5only.js')}}" type="text/javascript" ></script>
        <script src="{{asset('/backend/js/fileuploader-signle.js')}}" type="text/javascript" ></script>
        <script src="{{asset('/backend/js/showimg.js')}}" type="text/javascript" ></script>
