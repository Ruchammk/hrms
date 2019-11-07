
@extends('front.layouts.frontblanklayout')

@section('mainarea')

{!! HTML::style('/css/custom-emp-profile-styles.css', array("name" => "core")) !!}



<div class="col-md-12">
    @if ($active_company->license_expired == 1)
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger"><i class="fa fa-close"></i> Your companies account has been
                disabled. Please contact your manager for further details.
            </div>
        </div>
    </div>
    @endif
    @if ($active_company->license_expired != 1)
    <!--Profile Body-->
    <div class="profile-body" style="background: transparent;">
        <div class="row">
            <!--Profile Post-->
           
            <!--End Profile Event-->

        </div><!--/end row-->

        {{--  @if($setting->attendance_feature==1) --}}
        <!--Profile Blog-->
        <!-- <div class="panel panel-profile">
            <div class="panel-heading overflow-h service-block-u">
                <h2 class="panel-title heading-sm pull-left"><i
                            class="fa fa-tasks"></i>{{__('core.attendance')}}</h2>
            </div>
            <div class="panel-body panelHolder">

                <div class="alert-blocks alert-blocks-info">
                    <div class="overflow-h">
                        <strong class="color-dark">{{__('core.lastAbsent')}}
                            <small class="pull-right"><em>{!! $employee->lastAbsent('date') !!}</em></small>
                        </strong>
                        <small class="award-name">{!!  $employee->lastAbsent()!!}</small>
                    </div>
                </div>

                <div id='calendar'></div>

            </div>
        </div> --><!--/end row-->

        {!!  Form::open(['method' => 'PUT','files' => true, 'class'=>' ajax_form'])  !!}

        <input type="hidden" name="employee_db_id" value="{{$employee->employeeID}}">


        <div class="row">
            <div class="col-md-4">
                <div class="form-holder">
                    <div class="form-box">
                        <h3><i class="fa fa-user"></i> Personal Details</h3>
                            <div class="form-group">
                                <label for="employeeID"> {{__('core.employeeID')}}</label>

                                <input type="text" name="employeeID" class="form-control" value="{{ $employee->employeeID }}" readonly >

                            </div>
                            <div class="form-group">
                            <!--<label for="full_name">{{__('core.name')}}</label>-->
                            <label for="full_name">First Name</label>
                                <input type="text" name="full_name" class="form-control" value="{{$employee->full_name}}">
                            </div>
                            <div class="form-group">
                              <!-- <label for="father_name">{{__('core.father_name')}}</label> -->
                                <label for="father_name">Last Name</label>
                                <input type="text" name="father_name" class="form-control" value="{{$employee->father_name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">{{__('core.email')}}</label>
                                <input type="email" name="email" class="form-control" value="{{$employee->email}}">
                            </div>
                            <div class="form-group">
                              <!-- <label for="date_of_birth">{{__('core.dob')}}</label> -->
                                <label for="date_of_birth">Date Of Birth</label>
                                <input type="text" name="date_of_birth" class="form-control" value="{!!  date('d-M-Y',strtotime($employee->date_of_birth)) !!}">
                            </div>
                            <div class="form-group">
                                <label for="gender">{{__('core.gender')}}</label>
                                <select name="gender" id="" class="form-control">
                                    <option value="male" @if($employee->gender == 'male') selected @endif>Male</option>
                                    <option value="female" @if($employee->gender == 'female') selected @endif>Female</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="employee_marital_status">Marital Status</label>
                                <select name="employee_marital_status" id="" class="form-control">
                                    <option value="single" @if($employee->employee_marital_status == 'single') selected @endif>Single</option>
                                    <option value="widowed" @if($employee->employee_marital_status == 'widowed') selected @endif>Widowed</option>
                                    <option value="separated" @if($employee->employee_marital_status == 'separated') selected @endif>Separated</option>
                                    <option value="married" @if($employee->employee_marital_status == 'married') selected @endif>Married</option>
                                    <option value="divorced" @if($employee->employee_marital_status == 'divorced') selected @endif>Divorced</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="employee_race">Race</label>
                                <select name="employee_race" id="" class="form-control">
                                    <option value="african" @if($employee->employee_race == 'african') selected @endif>African</option>
                                    <option value="african_american" @if($employee->employee_race == 'african_american') selected @endif>African-American</option>
                                    <option value="caucasian" @if($employee->employee_race == 'caucasian') selected @endif>Caucasian</option>
                                    <option value="chinese" @if($employee->employee_race == 'chinese') selected @endif>Chinese</option>
                                    <option value="eurasian" @if($employee->employee_race == 'eurasian') selected @endif>Eurasian</option>
                                    <option value="filipino" @if($employee->employee_race == 'filipino') selected @endif>Filipino</option>
                                    <option value="indian" @if($employee->employee_race == 'indian') selected @endif>Indian</option>
                                    <option value="japanese" @if($employee->employee_race == 'japanese') selected @endif>Japanese</option>
                                    <option value="korean" @if($employee->employee_race == 'korean') selected @endif>Korean</option>
                                    <option value="malay" @if($employee->employee_race == 'malay') selected @endif>Malay</option>
                                    <option value="thai" @if($employee->employee_race == 'thai') selected @endif>Thai</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="employee_religion">Religion</label>
                                <select name="employee_religion" id="" class="form-control">
                                    <option value="taoism" @if($employee->employee_religion == 'taoism') selected @endif>Taoism</option>
                                    <option value="buddhism" @if($employee->employee_religion == 'buddhism') selected @endif>Buddhism</option>
                                    <option value="baha_i_faith" @if($employee->employee_religion == 'baha_i_faith') selected @endif>Bahá'í Faith</option>
                                    <option value="islam" @if($employee->employee_religion == 'islam') selected @endif>Islam</option>
                                    <option value="christianity" @if($employee->employee_religion == 'christianity') selected @endif>Christianity</option>
                                    <option value="hinduism" @if($employee->employee_religion == 'hinduism') selected @endif>Hinduism</option>
                                    <option value="sikhism" @if($employee->employee_religion == 'sikhism') selected @endif>Sikhism</option>
                                    <option value="judaism" @if($employee->employee_religion == 'judaism') selected @endif>Judaism</option>
                                    <option value="jainism" @if($employee->employee_religion == 'jainism') selected @endif>Jainism</option>
                                    <option value="others" @if($employee->employee_religion == 'others') selected @endif>Others</option>
                                </select>
                            </div>


                    </div>
                </div>

                <div class="form-holder">
                    <div class="form-box">
                        <h3><i class="fa fa-briefcase"></i> Employment Details</h3>

                            <div class="form-group">
                                <label for="joining_date">Joining Date</label>
                                <input type="text" class="form-control" name="joining_date"  value="{{  date('d-M-Y',strtotime($employee->joining_date)) }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="resign_date">Resign Date</label>
                                <input type="text" class="form-control" name="resign_date" value="{{date('d-M-Y',strtotime($employee->resign_date)) }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="confirmation_date">Confirmation Date</label>
                                <input type="text" class="form-control" name="confirmation_date" value="{{date('d-M-Y',strtotime( $employee->confirmation_date ))}}" readonly>
                            </div>

                    </div>
                </div>

                <div class="form-holder">
                   <div class="form-box">
                       <h3><i class="fa fa-briefcase"></i> Identification Documents</h3>

                           <div class="form-group">
                               <label for="employee_immigration_status">Immigration Status</label>
                               <select name="employee_immigration_status" id="" class="form-control">
                                   <option selected="selected" value="Singapore Citizen" @if($employee->employee_immigration_status == 'Singapore Citizen') selected @endif>Singapore Citizen</option>
                                   <option value="Singapore PR" @if($employee->employee_immigration_status == 'Singapore PR') selected @endif>Singapore PR</option>
                                   <option value="S Pass" @if($employee->employee_immigration_status == 'S Pass') selected @endif>S Pass</option>
                                   <option value="E Pass" @if($employee->employee_immigration_status == 'E Pass') selected @endif>E Pass</option>
                                   <option value="Letter of Consent(Dependent Pass, Long term visit pass)" @if($employee->employee_immigration_status == 'Letter of Consent(Dependent Pass, Long term visit pass)') selected @endif>Letter of Consent(Dependent Pass, Long term visit pass)</option>
                                   <option value="Work Permit" @if($employee->employee_immigration_status == 'Work Permit') selected @endif>Work Permit</option>
                                   <option value="Student Visa (No CPF, No SDL)" @if($employee->employee_immigration_status == 'Student Visa (No CPF, No SDL)') selected @endif>Student Visa (No CPF, No SDL)</option>
                                   <option value="Contract (No CPF, No SDL)" @if($employee->employee_immigration_status == 'Contract (No CPF, No SDL)') selected @endif>Contract (No CPF, No SDL)</option>
                                   <option value="Contract With SDL (No CPF, W/SDL)" @if($employee->employee_immigration_status == 'Contract With SDL (No CPF, W/SDL)') selected @endif>Contract With SDL (No CPF, W/SDL)</option>
                                   <option value="Work Holiday Pass(No CPF)" @if($employee->employee_immigration_status == 'Work Holiday Pass(No CPF)') selected @endif>Work Holiday Pass(No CPF)</option>
                                   <option value="EntrePass" @if($employee->employee_immigration_status == 'EntrePass') selected @endif>EntrePass</option>
                                   <option value="Intern" @if($employee->employee_immigration_status == 'Intern') selected @endif>Intern</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="employee_identification_number">Identification Number</label>
                               <input type="text" class="form-control" name="employee_identification_number" value="{{$employee->employee_identification_number}}">
                           </div>
                           <div class="form-group">
                               <label for="employee_passport_number">Passport Number</label>
                               <input type="text" class="form-control" name="employee_passport_number" value="{{$employee->employee_passport_number}}">
                           </div>
                           <div class="form-group">
                               <label for="employee_passport_doi">Passport Date Of Issue</label>
                               <input type="date" class="form-control" name="employee_passport_doi" value="{{$employee->employee_passport_doi}}">
                           </div>
                           <div class="form-group">
                               <label for="employee_passport_doe">Passport Date Of Expiry</label>
                               <input type="date" class="form-control" name="employee_passport_doe" value="{{$employee->employee_passport_doe}}">
                           </div>
                           <div class="form-group">
                               <label for="">Nationality</label>
                               <select name="employee_nationality" id="" class="form-control">
                                   <option value="Singapore" @if($employee->employee_nationality == 'Singapore') selected @endif>Singapore</option>
                                   <option value="Malasiya" @if($employee->employee_nationality == 'Malasiya') selected @endif>Malasiya</option>
                                   <option value="Other" @if($employee->employee_nationality == 'Other') selected @endif>Other</option>
                               </select>
                           </div>
                   </div>
                </div>






            </div>

            <div class="col-md-4">
                <!-- remove this latere - notice board -->
                <!--                            <div class="form-holder">
                                                <div class="notice-board">
                                                    <h3><i class="fa fa-bullhorn"></i> Notice Board</h3>
                                                    <div id="scrollbar2" class="panel-body contentHolder">

                                                    @forelse($noticeboards as $notice)
                                                        <div class="profile-event">
                                                            <div class="date-formats">
                                                                <span>{!! date('d',strtotime($notice->created_at)) !!}</span>
                                                                <small>{!! date('m, Y',strtotime($notice->created_at)) !!}</small>
                                                            </div>
                                                            <div class="overflow-h">
                                                                <h3 class="heading-xs"><a href="" data-toggle="modal"
                                                                                          data-target=".show_notice"
                                                                                          onclick="show_notice({{$notice->id}});return false;">{{$notice->title}}</a>
                                                                </h3>
                                                                @if(strpos($notice->description,'src')==0)
                                                                    <p>{!!  \Illuminate\Support\Str::limit(strip_tags($notice->description),100) !!}</p>
                                                                @else
                                                                    <p>&nbsp;</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <p class="text-center" style="padding: 4px; margin-top: 26%;">No Notice</p>
                                                    @endforelse

                                                </div>
                                                </div>
                                            </div>-->


                                             <!-- # remove this latere - notice board -->

                                             <div class="form-holder">
                                                 <div class="form-box">
                                                     <h3><i class="fa fa-briefcase"></i> Current Job Details</h3>

                                                     <div class="form-group">
                                                         <label for="designation">Title</label>
                                                         <?php
                                                          if(isset($employee->getDesignation->designation)){
                                                            ?>
                                                             <input type="text" name="designation" class="form-control" value="{{$employee->getDesignation->designation}}" readonly>
                                                            <?php
                                                          }else{
                                                            ?>
                                                            <input type="text" name="designation" class="form-control" value="" readonly>
                                                            <?php
                                                          }
                                                         ?>
                                                        
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="department">{{__('core.department')}}</label>
                                                         <?php
                                                          if(isset($employee->getDesignation->department->name)){
                                                            ?>
                                                             <input type="text" name="designation" class="form-control" value="{{$employee->getDesignation->department->name}}" readonly>
                                                            <?php
                                                          }else{
                                                            ?>
                                                            <input type="text" name="designation" class="form-control" value="" readonly>
                                                            <?php
                                                          }
                                                         ?>
                                                     </div>

                                                     <div class="form-group">
                                                         <label for="current_job_start_date">Start Date</label>
                                                         <input type="text" name="joining_date" class="form-control" value="{!! date('d-M-Y',strtotime($employee->joining_date)) !!}" readonly>
                                                     </div>

                                                     <div class="form-group">
                                                         <label for="current_job_end_date">End Date</label>
                                                         <input type="text" name="resign_date" class="form-control" value="{!! date('d-M-Y',strtotime($employee->resign_date)) !!}" readonly>
                                                     </div>

                                                    <!-- these 3 are not in db yet -->
                                                     <div class="form-group">
                                                         <label for="employee_rate_of_pay">Rate Of Pay</label>
                                                         <input type="text" name="employee_rate_of_pay" class="form-control" value="{{ $employee->bank_details->employee_rate_of_pay }}" readonly>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="employee_currency">Currency</label>
                                                         <input type="text" name="employee_currency" class="form-control" value="{{ $employee->bank_details->employee_currency }}" readonly>
                                                     </div>

                                                     <div class="form-group">
                                                         <label for="employee_amount">Amount</label>
                                                         <input type="text" name="employee_amount" class="form-control" value="{{ ($employee->employee_amount) ? $employee->employee_amount : '0.00'}}" disabled>
                                                     </div>
                                                     <!-- # these 3 are not in db yet -->
                                                 </div>
                                             </div>

                                             <div class="form-holder">
                                                 <div class="form-box">
                                                     <h3><i class="fa fa-briefcase"></i> Contact Details</h3>

                                                     <div class="form-group">
                                                         <label for="mobile_number">Contact Number</label>
                                                         <input type="number" name="mobile_number" class="form-control" value="{{$employee->mobile_number}}">
                                                     </div>

                                                     <div class="form-group">
                                                         <label for="local_address">Address Line 1</label>
                                                         <textarea name="local_address" id="" cols="30" rows="3" class="form-control">{{$employee->local_address}}</textarea>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="permanent_address">Address Line 2</label>
                                                         <textarea name="permanent_address" id="" cols="30" rows="3" class="form-control">{{$employee->permanent_address}}</textarea>
                                                     </div>

                                                     <div class="form-group">
                                                         <label for="employee_postal_code">Postal Code</label>
                                                         <input type="text" name="employee_postal_code" class="form-control" value="{{$employee->employee_postal_code}}">
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="form-holder">
                    <div class="form-box">
                        <h3><i class="fa fa-briefcase"></i> Statutory Details</h3>
                            <div class="form-group">
                                <label for="self_help_group_contribution">Self-Help Group Contribution</label>
                                <select name="self_help_group_contribution" id="" class="form-control" readonly>

                                    <?php
                                    $SelfHelpGroupContribution=array('CDAC','MBMF',"SINDA",'ECF','N/A');
                                       foreach ($SelfHelpGroupContribution as $key => $value) {
                                           ?>
                                         <option value="{{$value}}"
                                          <?php
                                            if ($value==$employee->self_help_group_contribution) {
                                                echo "selected=selected";
                                            } ?>
                                         >{{$value}}</option>
                                          <?php
                                       }
                          ?>
</select>
                            </div>
                            <div class="form-group">
                                <label for="additional_self_help_group_contribution">Additional Self-Help Group Contribution</label>
                                <select name="additional_self_help_group_contribution" id="" class="form-control" readonly>

                                    <?php
                                    $additionalSelfHelpGroupContribution=array('CDAC','MBMF',"SINDA",'ECF','N/A');
                                       foreach ($additionalSelfHelpGroupContribution as $key => $value) {
                                           ?>
                                         <option value="{{$value}}" <?php if ($value == $employee->additional_self_help_group_contribution) {
                                               echo "selected=selected";
                                           } ?> >{{$value}}</option>
                                          <?php
                                       } ?>
                                </select>
                            </div>
                    </div>




                </div>

                <!-- <div class="form-holder">
                    <div class="form-box">
                        <h3><i class="fa fa-briefcase"></i> Finance</h3>
                        <form action="">
                            <div class="form-group">
                                <label for="">Cost centre</label>
                                <input type="text" name="employee_cost_center" class="form-control" value="N/A" readonly>
                            </div>
                        </form>
                    </div>
                </div> -->











                                        </div>

                                        <div class="col-md-4">


                                            <div class="form-holder">
                    <div class="form-box">
                        <h3><i class="fa fa-briefcase"></i> Payment Details</h3>
                        <form action="">

                            <div class="form-group">
                                <label for="">Payment Method</label>
                                <select name="employee_bank_payment_method" id="" class="form-control" readonly>
                                    <option value="Bank Transfer" @if($employee->bank_details->employee_bank_payment_method == 'Bank Transfer') selected @endif>Bank Transfer</option>
                                   <option value="Cheque" @if($employee->bank_details->employee_bank_payment_method == 'Cheque') selected @endif>Cheque</option>
                                </select>
                            </div>

                           <div class="form-group">
                                <label for="">{{__('core.bank')}}</label>
                                    <select name="bank" id="" class="form-control" readonly>
<option value="22" @if($employee->bank_details->bank == '22') selected @endif>ANZ</option>
<option value="55" @if($employee->bank_details->bank == '22') selected @endif>ASB Bank Limited(New Zealand)</option>
<option value="74" @if($employee->bank_details->bank == '22') selected @endif>AXIS Bank</option>
<option value="20" @if($employee->bank_details->bank == '22') selected @endif>Allahabad</option>
<option value="79" @if($employee->bank_details->bank == '22') selected @endif>BNP Paribas</option>
<option value="91" @if($employee->bank_details->bank == '22') selected @endif>Bank of America</option>
<option value="24" @if($employee->bank_details->bank == '22') selected @endif>Bank of China</option>
<option value="9" @if($employee->bank_details->bank == '22') selected @endif>CIMB</option>
<option value="11" @if($employee->bank_details->bank == '22') selected @endif>Citibank N.A Singapore Branch (CNAS)</option>
<option value="86" @if($employee->bank_details->bank == '22') selected @endif>Citibank Singapore Limited (CSL)</option>
<option value="13" @if($employee->bank_details->bank == '22') selected @endif>Commerzbank</option>
<option value="12" @if($employee->bank_details->bank == '22') selected @endif>Crédit Agricole</option>
<option value="1" @if($employee->bank_details->bank == '22') selected @endif>DBS</option>
<option value="77" @if($employee->bank_details->bank == '22') selected @endif>DnB NOR Bank ASA</option>
<option value="3" @if($employee->bank_details->bank == '22') selected @endif>HSBC</option>
<option value="23" @if($employee->bank_details->bank == '22') selected @endif>HSBC Corporate</option>
<option value="70" @if($employee->bank_details->bank == '22') selected @endif>ICICI Bank</option>
<option value="62" @if($employee->bank_details->bank == '22') selected @endif>India - Canara Bank</option>
<option value="52" @if($employee->bank_details->bank == '22') selected @endif>India - HDFC Bank</option>
<option value="60" @if($employee->bank_details->bank == '22') selected @endif>India - State Bank of India</option>
<option value="61" @if($employee->bank_details->bank == '22') selected @endif>India - The Federal Bank Ltd</option>
<option value="2" @if($employee->bank_details->bank == '22') selected @endif>Maybank</option>
<option value="73" @if($employee->bank_details->bank == '22') selected @endif>Mizuho Corporate Bank, Ltd</option>
<option value="8" @if($employee->bank_details->bank == '22') selected @endif>OCBC</option>
<option value="6" @if($employee->bank_details->bank == '22') selected @endif>POSB</option>
<option value="7" @if($employee->bank_details->bank == '22') selected @endif>POSB Plus</option>
<option value="5" @if($employee->bank_details->bank == '22') selected @endif>RHB</option>
<option value="78" @if($employee->bank_details->bank == '22') selected @endif>Shinhan</option>
<option value="4" @if($employee->bank_details->bank == '22') selected @endif>Standard Chartered</option>
<option value="72" @if($employee->bank_details->bank == '22') selected @endif>Sumitomo Mitsui Banking Corporation</option>
<option value="71" @if($employee->bank_details->bank == '22') selected @endif>Sydbank</option>
<option value="81" @if($employee->bank_details->bank == '22') selected @endif>The Bank of Tokyo-Mitsubishi UFJ, Ltd</option>
<option value="59" @if($employee->bank_details->bank == '22') selected @endif>UBS AG</option>
<option value="10" @if($employee->bank_details->bank == '22') selected @endif>UOB</option></select>
                                      </select>
                                </div>


                                    <div class="form-group">
                                    <label for="account_number">{{__('core.account_number')}}</label>
                                        <input type="text" name="account_number" class="form-control" value="{{isset($employee->bank_details->account_number) ? $employee->bank_details->account_number : ''}}" readonly>
                                        </div>

                                     <div class="form-group">
                                            <label for="">Bank Code</label>
                                           <input type="text" name="employee_bank_code" class="form-control"
                                       value="{{isset($employee->bank_details->employee_bank_code) ? $employee->bank_details->employee_bank_code : ''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Branch Code</label>
                                           <input type="text" name="employee_bank_branch_code" class="form-control"
                                       value="{{isset($employee->bank_details->employee_bank_branch_code) ? $employee->bank_details->employee_bank_branch_code : ''}}" readonly>
                                        </div>


                                        <div class="form-group">
                                            <label for="account_name">{{__('core.accountHolder')}}</label>
                                            <input type="text" name="account_name" class="form-control" value="{{isset($employee->bank_details->account_name) ? $employee->bank_details->account_name : ''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="employee_bank_swift_code">Swift Code</label>
                                            <input type="text" class="form-control" value="{{isset($employee->bank_details->employee_bank_swift_code) ? $employee->bank_details->employee_bank_swift_code : ''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="branch">{{__('core.branch')}}</label>
                                            <input type="text" name="branch" class="form-control" value="{{isset($employee->bank_details->branch) ? $employee->bank_details->branch : ''}}" readonly>
                                        </div>
                                        </div>



                                        </div>


                                        <div class="form-holder">
                                            <div class="form-box">
                                                <h3><i class="fa fa-briefcase"></i> Branch and Role</h3>
                                                <div class="form-group">
                                                    <label for="Branch and Role">Branch</label>
                                                    <select name="branch_and_role" id="branch_and_role" class="form-control" readonly>
                                                        <?php 
                                                        foreach($branches as $key => $value) {
                                                            ?>
                                                            <option value="{{$value->id}}"
                                                                <?php
                                                                if($value->id==$employee->employee_branch){echo 'selected=selected';}
                                                                    ?>
                                                                >{{$value->name}}</option>
                                                                <?php
                                                            }
                                                            ?>                                           
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Role</label>
                                                        <select name="role" id="role" class="form-control" readonly>
                                                            <?php 
                                                            foreach ($roles as $key => $value) {
                                                                ?>
                                                                <option value="{{$value->id}}"
                                                                    <?php
                                                                    if($value->id==$employee->employee_role){echo 'selected';}
                                                                        ?>
                                                                    >{{$value->name}}</option>
                                                                    <?php
                                                                }
                                                                ?>      
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="form-holder">
                                               <div class="form-box">
                                                   <h3><i class="fa fa-briefcase"></i> Working Days and Hours</h3>
                                                       <div class="form-group">
                                                           <label for="Working day">Working day</label>
                                                           <select name="working_day" id="working_day" class="form-control" readonly>
                                                               <option value="">Default</option>
                                                               <option value="">Option 2</option>
                                                           </select>
                                                       </div>
                                                       <div class="form-group">
                                                           <label for="">Working hour</label>
                                                           <select name="working_hour" id="working_hour" class="form-control" readonly>
                                                               <option value="">Option 1</option>
                                                               <option value="">Option 2</option>
                                                           </select>
                                                       </div>
                                               </div>
                                           </div>



                                           <div class="form-holder">
                                           <div class="form-box">
                                           <h3><i class="fa fa-briefcase"></i> Next of Kin</h3>
                                           <form action="">

                                           <div class="form-group">
                                           <label for="nok_name">Name</label>
                                           <input type="text" name="nok_name" class="form-control" value="{{isset($employee->nok_name) ? $employee->nok_name : ''}}">
                                           </div>

                                           <div class="form-group">
                                           <label for="nok_relationship">Relationship</label>
                                           <select name="nok_relationship" id="" class="form-control">


                                           <option value="Wife" @if($employee->nok_relationship == 'Wife') selected @endif>Wife</option>
                                           <option value="Husband" @if($employee->nok_relationship == 'Husband') selected @endif>Husband</option>
                                           <option value="Daughter" @if($employee->nok_relationship == 'Daughter') selected @endif>Daughter</option>
                                           <option value="Son" @if($employee->nok_relationship == 'Son') selected @endif>Son</option>
                                           <option value="Mother" @if($employee->nok_relationship == 'Mother') selected @endif>Mother</option>
                                           <option value="Father" @if($employee->nok_relationship == 'Father') selected @endif>Father</option>
                                           <option value="Sister" @if($employee->nok_relationship == 'Sister') selected @endif>Sister</option>
                                           <option value="Brother" @if($employee->nok_relationship == 'Brother') selected @endif>Brother</option>
                                           <option value="Others" @if($employee->nok_relationship == 'Others') selected @endif>Others</option>

                                           </select>
                                           </div>


                                           <div class="form-group">
                                               <label for="nok_id_passport">Identity Card Number/Passport</label>
                                               <input type="text" name="nok_id_passport" class="form-control" value="{{isset($employee->nok_id_passport) ? $employee->nok_id_passport : ''}}">
                                           </div>

                                           <div class="form-group">
                                               <label for="nok_contact_number">Contact Number</label>
                                               <input type="text" name="nok_contact_number" class="form-control" value="{{isset($employee->nok_contact_number) ? $employee->nok_contact_number : ''}}">
                                           </div>
                                           </div>

                                           </div>


                                        </div>

                                        </div>
                                        <button type="button" onclick="employeeProfileSetting( {{$employee->id}} )" data-loading-text="Updating..." class="btn green">Update</button>
                                        {{-- @endif --}}
                                        {!!  Form::close()  !!}
                                        <!--End Profile Blog-->

                                        </div>
                                        <!--End Profile Body-->
                                        </div>


                                        {{--------------------------Show Notice MODALS-----------------}}
                                        <div class="modal fade show_notice in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                        <h4 id="myLargeModalLabel" class="modal-title show-notice-title">
                                                            {{--Notice Title using Javascript--}}
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body" id="show-notice-body">
                                                        {{--Notice full Description using Javascript--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{------------------------END Notice MODALS---------------------}}
                                        @endif

                                        @stop

                                        @section('footerjs')
                                        @if ($active_company->license_expired != 1)
                                        {{-- !! HTML::script('front_assets/plugins/fullcalendar/fullcalendar.min.js') !! --}}
                                        {{-- !! HTML::script("front_assets/plugins/fullcalendar/lang-all.js") !! --}}

                                        <script>
                                            /*
                                             $(document).ready(function () {

                                             $('#calendar').fullCalendar({
                                             lang: '{{Lang::getLocale()}}',

                                             editable: false,
                                             eventLimit: true, // allow "more" link when too many events
                                             eventRender: function (event, element) {
                                             var i = document.createElement('i');
                                             // Add all your other classes here that are common, for demo just 'fa'
                                             i.className = 'fa';
                                             i.classList.add(event.icon);
                                             if (event.type == 'birthday') {
                                             element.find('div.fc-content').prepend(i);
                                             }
                                             if (event.className == "holiday") {
                                             var dataToFind = moment(event.start).format('YYYY-MM-DD');
                                             $('.fc-day[data-date="' + dataToFind + '"]').css('background', 'rgba(255, 224, 205, 1)');
                                             }
                                             },
                                             events: function (start, end, timezone, callback) {
                                             jQuery.ajax({
                                             url: '{{route('front.attendance.ajax_load_calender')}}',
                                             type: 'POST',
                                             dataType: 'json',
                                             data: {
                                             start: start.format(),
                                             end: end.format()
                                             },
                                             success: function (doc) {
                                             var events = [];
                                             if (!!doc) {
                                             $.map(doc, function (r) {
                                             if (r.type == 'absent_other') {
                                             icon = 'no';
                                             type = r.type;
                                             etitle = r.title + "-" + r.leaveType;
                                             bgcolor = '#FF9800';
                                             eClassName = ''
                                             } else if (r.a_status == "absent") {
                                             icon = 'no';
                                             type = 'attendance';
                                             bgcolor = '#e50000';
                                             etitle = r.a_status + "-" + r.leaveType;
                                             eClassName = '';
                                             } else if (r.a_status == "present") {
                                             icon = 'no';
                                             type = 'attendance';
                                             bgcolor = '';
                                             etitle = r.a_status;
                                             eClassName = '';
                                             } else if (r.type == 'birthday') {
                                             icon = 'fa-birthday-cake';
                                             type = r.type;
                                             etitle = r.title;
                                             bgcolor = 'green';
                                             eClassName = ''
                                             } else {
                                             icon = 'no';
                                             type = 'holiday';
                                             etitle = r.title;
                                             bgcolor = 'grey';
                                             eClassName = 'holiday'
                                             }
                                             events.push({
                                             className: eClassName,
                                             color: bgcolor,
                                             'icon': icon,
                                             type: type,
                                             id: r.id,
                                             title: etitle,
                                             start: r.date

                                             });
                                             });
                                             }
                                             callback(events);
                                             }
                                             });
                                             }


                                             });

                                             });
                                             */


                                            function show_notice(id) {
                                            var url = "{{ route('front.notice_ajax',':id') }}";
                                            url = url.replace(':id', id);
                                            $.easyAjax({
                                            url: url,
                                                    type: "GET",
                                                    data: $(".ajax_form").serialize(),
                                                    container: ".ajax_form",
                                                    success: function (response) {

                                                    $('.show-notice-title').html(response.title);
                                                    $('#show-notice-body').html(response.description);
                                                    },
                                            });
                                            }


                                            function employeeProfileSetting(id) {
                                            var url = "{{ route('front.employee_profile.update') }}";
                                            $.easyAjax({
                                            type: 'POST',
                                            url: url,
                                            container: '.ajax_form',
                                            file: true,
                                            });
                                            }

                                        </script>
                                        @endif
                                        @stop
