<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Failed Jobs</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['']) ? urlencode($data['']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-uuid">
                                        <th class="title"> Uuid: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['uuid']; ?>" 
                                                data-pk="<?php echo $data[''] ?>" 
                                                data-url="<?php print_link("failed_jobs/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="uuid" 
                                                data-title="Enter Uuid" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['uuid']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-connection">
                                        <th class="title"> Connection: </th>
                                        <td class="value">
                                            <span  data-pk="<?php echo $data[''] ?>" 
                                                data-url="<?php print_link("failed_jobs/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="connection" 
                                                data-title="Enter Connection" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['connection']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-queue">
                                        <th class="title"> Queue: </th>
                                        <td class="value">
                                            <span  data-pk="<?php echo $data[''] ?>" 
                                                data-url="<?php print_link("failed_jobs/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="queue" 
                                                data-title="Enter Queue" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['queue']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-payload">
                                        <th class="title"> Payload: </th>
                                        <td class="value">
                                            <span  data-pk="<?php echo $data[''] ?>" 
                                                data-url="<?php print_link("failed_jobs/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="payload" 
                                                data-title="Enter Payload" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['payload']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-exception">
                                        <th class="title"> Exception: </th>
                                        <td class="value">
                                            <span  data-pk="<?php echo $data[''] ?>" 
                                                data-url="<?php print_link("failed_jobs/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="exception" 
                                                data-title="Enter Exception" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['exception']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-failed_at">
                                        <th class="title"> Failed At: </th>
                                        <td class="value"> <?php echo $data['failed_at']; ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
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
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <!-- Empty Record Message -->
                                        <div class="text-muted p-3">
                                            <i class="fa fa-ban"></i> No Record Found
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
