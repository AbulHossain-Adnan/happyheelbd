<template lang="">
    <div>
        <div class="card mb-3">
           
            <div class="card-body">
            <div class="row">
                   
                    <!-- Tab panes -->
                    <div class="tab-content  text-muted">
                        <div class="tab-pane active" id="personal1" role="tabpanel">
                            <div class="mt-4">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                             <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Employment History
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="text-muted"  >
                                                            <form
                                                            @submit.prevent="employmentHistoryStore()"  @keydown="employment.onKeydown($event)" >
                                                                <div class="row" v-for="(row, index) in employment.EmploymentHistory">
                                                                    <div class="col-lg-5">
                                                                        <label for="formrow-firstname-input" class="form-label">Company Name *</label>
                                                                        <input type="text" class="form-control" id="formrow-firstname-input"  v-model="row.company_name"
                                                                        :name="'employment['+index+'][company_name]'"
                                                                        placeholder="e.g. company_name">
                                                                        <HasError :form="employment" field="company_name" />
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label for="formrow-firstname-input" class="form-label"> Company Business *</label>
                                                                        <input type="text"  :name="'employment['+index+'][company_business]'"  v-model="row.company_business" class="form-control" id="formrow-firstname-input"  placeholder="e.g. company_business">
                                                                        <HasError :form="employment" field="company_business" />
                                                                    </div>
                                                                <!-- </div> -->
                                                                <!-- <div class="row"> -->
                                                                    <div class="col-lg-5">
                                                                        <label for="formrow-firstname-input" class="form-label">Designation *</label>
                                                                        <input type="text" :name="'employment['+index+'][designation]'" class="form-control" id="formrow-firstname-input"  v-model="row.designation"
                                                                        name="designation"
                                                                        placeholder="e.g. designation">
                                                                        <HasError :form="employment" field="designation" />
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label for="formrow-firstname-input" class="form-label"> Department  *</label>
                                                                        <input type="text" :name="'employment['+index+'][department]'"   v-model="row.department" class="form-control" id="formrow-firstname-input"  placeholder="e.g. department">
                                                                        <HasError :form="employment" field="department" />
                                                                    </div>
                                                                <!-- </div> -->
                                                              

                                                                <!-- <div class="row"> -->
                                                                    <div class="col-lg-5">
                                                                        <label for="formrow-firstname-input" class="form-label">Employment Period *</label>
                                                                        <input type="date" class="form-control" id="formrow-firstname-input"  v-model="row.start_date"
                                                                        :name="'employment['+index+'][start_date]'"
                                                                        placeholder="e.g. start_date">
                                                                        <HasError :form="employment" field="start_date" />
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <label for="formrow-firstname-input" class="form-label"> Todate  *</label>
                                                                        <input type="date"  :name="'employment['+index+'][todate]'"   class="form-control" id="formrow-firstname-input"  placeholder="e.g. company_business"  v-model="row.todate" >
                                                                    </div>
                                                                <!-- </div> -->

                                                                <!-- <div class="row"> -->
                                                                    <!-- <div class="col-lg-11">
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            Currently Working
                                                                        </label>
                                                                        </div>
                                                                    </div> -->
                                                                <!-- </div> -->
                                                                <div class="col-lg-1">
                                                                        <div class="mb-2">
                                                                          <div class="col-lg-2" v-if="index!=0">
                                                                          <button type="button" class="btn btn-outline-danger"  @click.prevent="removeEmploymentHistory(index)">Remove</button>
                                                                          </div>
                                                                        </div>
                                                                      </div>


                                                                <!-- <div class="row"> -->
                                                                    <div class="col-lg-11">
                                                                        <div class="mb-4">
                                                                            <label for="exampleFormControlTextarea1" class="form-label">Responsibilities</label>
                                                                            <textarea :name="'employment['+index+'][responsibilities]'" class="form-control" id="exampleFormControlTextarea1" rows="3"  v-model="row.responsibilities"></textarea>
                                                                        </div>
                                                                        <HasError :form="employment" field="responsibilities" />
                                                                    </div>
                                                                <!-- </div> -->
                                                                <!-- <div class="row"> -->



                                                                    <div class="col-lg-5">
                                                                        <label for="formrow-firstname-input" class="form-label">Area of Expertice (max 3) *</label>
                                                                        <Multiselect
                                                                    
                                                                      v-model="row.skill_ids"
                                                                      mode="tags"
                                                                      placeholder="Select Area of expertice"
                                                                      :close-on-select="false"
                                                                      :create-option="false"
                                                                      :options="skillData"
                                                                  />
                                                                  <HasError :form="employment" field="skill_ids" />
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <label for="formrow-firstname-input" class="form-label"> Duration(Month)  *</label>
                                                                        <input type="integer"   :name="'employment['+index+'][duration]'"  v-model="row.duration" class="form-control" id="formrow-firstname-input"  placeholder="e.g. 3">
                                                                        <HasError :form="employment" field="duration" />
                                                                    </div>
                                                                    <div class="col-lg-1">
                                                                        <!-- <div class="mb-3">
                                                                            <button type="button" class="btn btn-danger btn-sm form-control mt-4" disabled>remove</button>
                                                                        </div> -->
                                                                    </div>
                                                                <!-- </div> -->
                                                                <div>
                                                                  
                                                                    </div>
                                                                <!-- <div class="row"> -->
                                                                    <div class="col-lg-11">
                                                                        <label for="formrow-firstname-input" class="form-label">Job Location *</label>
                                                                        <input type="text"  :name="'employment['+index+'][job_location]'" class="form-control" id="formrow-firstname-input"   v-model="row.job_location"  placeholder="e.g. location">
                                                                    </div>
                                                              </div>
                                                        <div>
                                                          <button v-if="employmentHistoryStoreMode == true"  type="submit" class="btn btn-success btn-lg w-md">Save</button>
                                                            <!-- <button v-if="employmentHistoryStoreMode == false" type="button" @click="employmentHistoryUpdate()" class="btn btn-success btn-lg w-md ">Update</button> -->
                                                            <button v-if="employmentHistoryStoreMode == false" type="submit"  class="btn btn-success btn-lg w-md ">Update</button>
                                                            <button   type="button" class="btn btn-outline-success float-right"  @click.prevent="addMoreEmploymentHistory">+Add More</button>
                                                        </div>
                                                    </form>  
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                       </div>
                    </div>
                </div>
          </div>
    </div>
</div>

<vue-progress-bar></vue-progress-bar>
      <notifications />
</div>
</template>
<script>
import PaginationComponent from "../../../components/PaginationComponent.vue";
import { ElNotification } from "element-plus";
import axios from "axios";
import Form from "vform";
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";
 
import {
  Button,
  HasError,
  AlertError,
  AlertErrors,
  AlertSuccess,
} from "vform/src/components/bootstrap5";
export default {
  name: "CCCjobpostsTable",
  components: {
    PaginationComponent,
    Button,
    HasError,
    Multiselect,
    AlertError,
    AlertErrors,
    AlertSuccess,
  },
  data() {
    return {
      backendUrl: this.$store.state.backendUrl,
      //   backendUrl: "http://127.0.0.1:8000/",
      personaldetails: [],
      divisions:[],
      districts:[],
      thanas:[],
      addresses:[],
      skillData:[],
      storeMode:true,
      employmentHistoryStoreMode:true,
      jobposts: [],
      resume_id:localStorage.getItem('resume_id'),
   
                                                                                                                                                            
      employment: new Form({
      EmploymentHistory:
      [{
        id: "",
        resume_id:this.resume_id,
        company_name: "",
        company_business: "",
        designation: "",
        department: "",
        start_date: "",
        todate: "",
        responsibilities: "",
        duration:"",
        job_location: "",
        skill_ids:[],
    }]
      }),
    };
  },
  watch: {
    keyword: function () {
      this.getData();
      this.getDependentData();
    },
  },
  mounted() {
    console.log("Component mounted.");
    this.getData();
    this.getDependentData();
  },
  methods: {
    getData() {
    // fetching  from resumes table
      // this.$Progress.start();
      // let resumes =`${this.backendUrl}resumes`;
      // axios
      //   .get(resumes).then((response) => {
      //     this.resume_id = response.data.id;
      //     this.$Progress.finish();
      //   })
      //   .catch((e) => {
      //     console.log(e);
      //     this.$Progress.fail();
      //   });
        // end 
      // fetching  EmploymentHistory data
      let employmentHistory =`${this.backendUrl}user/employment-history/`+this.resume_id;
      axios
        .get(employmentHistory).then((response) => {
          if(response.data.length > 0) {
            this.employmentHistoryStoreMode = false;
            this.employment.EmploymentHistory = response.data;
          }
        })
        .catch((e) => {
          console.log(e);
        });
        // end 
    },
  // fetching skill data
  getDependentData() {
   axios.get(`${this.backendUrl}skill`)
     .then((response) => {
       let data =  response.data.data.map((item) => {
         return { value: item.id, label: item.title }
       })
       this.skillData = data;
     })
     .catch((e) => {
         this.$Progress.fail();
     });
  },
 // end
    // Store EmploymentHistory
    employmentHistoryStore() {
      this.$Progress.start();
      this.employment.busy = true;
      this.employment
        .post(`${this.backendUrl}employment-history`,{
                params: {
                  resume_id: this.resume_id,
                },
            })
        .then((response) => {
          if (this.employment.successful) {
            this.getData();
            this.$Progress.finish();
                ElNotification({
                    title: "Success",
                    message: "Data Stored SuccessFully",
                    type: "success",
                });
          } else {
                this.$Progress.fail();
                ElNotification({
                    title: "Error",
                    message: "Data Not Stored",
                    type: "error",
                });
            }
        })
        .catch((e) => {
          this.$Progress.fail();
          console.log(e);
        });
    },
    // End PersonalDetails Store\
    // Start resume Update
    employmentHistoryUpdate() {
      this.$Progress.start();
      this.form.busy = true;
      this.form
        .put(`${this.backendUrl}employment-history/` + this.form.id).then((response) => {
          this.getData();
          if (this.form.successful) {
                this.$Progress.finish();
                    ElNotification({
                      title: "Success",
                      message: "Data Updated Successfully",
                      type: "success",
                    });
            }else {
                    this.$Progress.fail();
                      ElNotification({
                      title: "Error",
                      message: "Data Not Updated",
                      type: "error",
                    });
                  }
        })
        .catch((e) => {
          this.$Progress.fail();
          console.log(e);
        });
    },
    // End resume Update
    // Store Address data
     addressStore() {
        this.$Progress.start();
        this.addressForm.busy = true;
        this.addressForm
        .post(`${this.backendUrl}address`)
        .then((response) => {
            console.log(response.data);
            console.log('address respn');
          if (this.addressForm.successful) {
              ElNotification({
                  title: "Success",
                  message: "Data Stored SuccessFully",
                  type: "success",
                });
                this.$Progress.finish();
          } else {
                this.$Progress.fail();
                ElNotification({
                  title: "Error",
                  message: "Data Not Stored",
                  type: "error",
                });
            }
        })
        .catch((e) => {
          this.$Progress.fail();
          console.log(e);
        });
    },
    // End Address Store
    //addMoreEmploymentHistory 
    addMoreEmploymentHistory() {
        this.employment.EmploymentHistory.push({
        id: "",
        resume_id: this.resume_id,
        company_name: "",
        company_business: "",
        designation: "",
        department: "",
        start_date: "",
        todate: "",
        responsibilities: "",
        job_location: "",
        skill_ids:[],
        });
    },
   // remove multiple row addresses 
   removeEmploymentHistory(index) {
      this.employment.EmploymentHistory.splice(index,1);
    },
    // end
  },
};
</script>