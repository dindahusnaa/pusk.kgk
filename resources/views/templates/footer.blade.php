                    
                            <!-- nk-content-body -->
                            </div>
                        <!-- nk-content-inner -->
                        </div>
                    <!-- container wide-xl -->
                    </div>  
                <!-- nk-content -->
                </div>
            <!-- nk-wrap -->
            </div>        
        <!-- nk-main -->
        </div>
            <footer class="col-lg-12 pt-3">
                <h6 class="text-center">© <?= date('Y') ?> Puskesmas Kagok Kota Semarang  Terms Privacy</h6>
            </footer>
    <!-- nk-app-root -->
    </div>
       
    <script src="{{ url('/assets/js/bundle.js?ver=3.1.0') }}"></script>
    <script src="{{ url('/assets/js/scripts.js?ver=3.1.0') }}"></script>
    <script src="{{ url('/assets/js/charts/gd-default.js?ver=3.1.0') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script type="text/javascript">
        var base_url = "<?php echo url('/'); ?>";
    </script>

    <?php if(isset($js)) echo $js; ?>

</body>

</html>