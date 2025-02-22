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
                    <h4 class="record-title">View  Personal Access Tokens</h4>
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
                                    <tr  class="td-tokenable_type">
                                        <th class="title"> Tokenable Type: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-tokenable_id">
                                        <th class="title"> Tokenable Id: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-name">
                                        <th class="title"> Name: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-token">
                                        <th class="title"> Token: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-abilities">
                                        <th class="title"> Abilities: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-last_used_at">
                                        <th class="title"> Last Used At: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-expires_at">
                                        <th class="title"> Expires At: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-created_at">
                                        <th class="title"> Created At: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-updated_at">
                                        <th class="title"> Updated At: </th>
                                        <td class="value">
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
