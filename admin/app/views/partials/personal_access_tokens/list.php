<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Personal Access Tokens</h4>
                </div>
                <div class="col-sm-3 ">
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("personal_access_tokens/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Personal Access Tokens 
                    </a>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('personal_access_tokens'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 comp-grid">
                        <div class="">
                            <!-- Page bread crumbs components-->
                            <?php
                            if(!empty($field_name) || !empty($_GET['search'])){
                            ?>
                            <hr class="sm d-block d-sm-none" />
                            <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                                <ul class="breadcrumb m-0 p-1">
                                    <?php
                                    if(!empty($field_name)){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('personal_access_tokens'); ?>">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                        <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                    </li>
                                    <?php 
                                    }   
                                    ?>
                                    <?php
                                    if(get_value("search")){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('personal_access_tokens'); ?>">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-capitalize">
                                        Search
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                            <!--End of Page bread crumbs components-->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div  class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        <div  class=" animated fadeIn page-content">
                            <div id="personal_access_tokens-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th class="td-sno">#</th>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-tokenable_type"> Tokenable Type</th>
                                                <th  class="td-tokenable_id"> Tokenable Id</th>
                                                <th  class="td-name"> Name</th>
                                                <th  class="td-token"> Token</th>
                                                <th  class="td-abilities"> Abilities</th>
                                                <th  class="td-last_used_at"> Last Used At</th>
                                                <th  class="td-expires_at"> Expires At</th>
                                                <th  class="td-created_at"> Created At</th>
                                                <th  class="td-updated_at"> Updated At</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(!empty($records)){
                                        ?>
                                        <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                            <!--record-->
                                            <?php
                                            $counter = 0;
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['']) ? urlencode($data['']) : null);
                                            $counter++;
                                            ?>
                                            <tr>
                                                <th class="td-sno"><?php echo $counter; ?></th>
                                                <td class="td-id"><a href="<?php print_link("personal_access_tokens/view/0") ?>"><?php echo $data['id']; ?></a></td>
                                                <td class="td-tokenable_type">
                                                    <span  data-value="<?php echo $data['tokenable_type']; ?>" 
                                                        data-pk="<?php echo $data[''] ?>" 
                                                        data-url="<?php print_link("personal_access_tokens/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="tokenable_type" 
                                                        data-title="Enter Tokenable Type" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <?php echo $data['tokenable_type']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-tokenable_id">
                                                    <span  data-value="<?php echo $data['tokenable_id']; ?>" 
                                                        data-pk="<?php echo $data[''] ?>" 
                                                        data-url="<?php print_link("personal_access_tokens/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="tokenable_id" 
                                                        data-title="Enter Tokenable Id" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="number" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <?php echo $data['tokenable_id']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-name">
                                                    <span  data-value="<?php echo $data['name']; ?>" 
                                                        data-pk="<?php echo $data[''] ?>" 
                                                        data-url="<?php print_link("personal_access_tokens/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="name" 
                                                        data-title="Enter Name" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <?php echo $data['name']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-token">
                                                    <span  data-value="<?php echo $data['token']; ?>" 
                                                        data-pk="<?php echo $data[''] ?>" 
                                                        data-url="<?php print_link("personal_access_tokens/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="token" 
                                                        data-title="Enter Token" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <?php echo $data['token']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-abilities">
                                                    <span  data-pk="<?php echo $data[''] ?>" 
                                                        data-url="<?php print_link("personal_access_tokens/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="abilities" 
                                                        data-title="Enter Abilities" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="textarea" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <?php echo $data['abilities']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-last_used_at">
                                                    <span  data-value="<?php echo $data['last_used_at']; ?>" 
                                                        data-pk="<?php echo $data[''] ?>" 
                                                        data-url="<?php print_link("personal_access_tokens/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="last_used_at" 
                                                        data-title="Enter Last Used At" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <?php echo $data['last_used_at']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-expires_at">
                                                    <span  data-value="<?php echo $data['expires_at']; ?>" 
                                                        data-pk="<?php echo $data[''] ?>" 
                                                        data-url="<?php print_link("personal_access_tokens/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="expires_at" 
                                                        data-title="Enter Expires At" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <?php echo $data['expires_at']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-created_at">
                                                    <span  data-value="<?php echo $data['created_at']; ?>" 
                                                        data-pk="<?php echo $data[''] ?>" 
                                                        data-url="<?php print_link("personal_access_tokens/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="created_at" 
                                                        data-title="Enter Created At" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <?php echo $data['created_at']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-updated_at">
                                                    <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                        data-value="<?php echo $data['updated_at']; ?>" 
                                                        data-pk="<?php echo $data[''] ?>" 
                                                        data-url="<?php print_link("personal_access_tokens/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="updated_at" 
                                                        data-title="Enter Updated At" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="flatdatetimepicker" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <?php echo $data['updated_at']; ?> 
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                            <!--endrecord-->
                                        </tbody>
                                        <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                    <?php 
                                    if(empty($records)){
                                    ?>
                                    <h4 class="bg-light text-center border-top text-muted animated bounce  p-3">
                                        <i class="fa fa-ban"></i> No record found
                                    </h4>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <?php
                                if( $show_footer && !empty($records)){
                                ?>
                                <div class=" border-top mt-2">
                                    <div class="row justify-content-center">    
                                        <div class="col-md-auto justify-content-center">    
                                            <div class="p-3 d-flex justify-content-between">    
                                                <div class="dropup export-btn-holder mx-1">
                                                    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-save"></i> Export
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                                            </a>
                                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                                </a>
                                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                                    </a>
                                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">   
                                                            <?php
                                                            if($show_pagination == true){
                                                            $pager = new Pagination($total_records, $record_count);
                                                            $pager->route = $this->route;
                                                            $pager->show_page_count = true;
                                                            $pager->show_record_count = true;
                                                            $pager->show_page_limit =true;
                                                            $pager->limit_count = $this->limit_count;
                                                            $pager->show_page_number_list = true;
                                                            $pager->pager_link_range=5;
                                                            $pager->render();
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
