 <style>
     .starrating>input {
         display: none;
     }

     /* Remove radio buttons */

     .starrating>label:before {
         content: "\f005";
         /* Star */
         margin: 2px;
         font-size: 30px;
         font-family: FontAwesome;
         display: inline-block;
     }

     .starrating>label {
         color: #222222;
         /* Start color when not clicked */
     }

     .starrating>input:checked~label {
         color: #ffca08;
     }

     /* Set yellow color when star checked */

     .starrating>input:hover~label {
         color: #ffca08;
     }

     .risingstar {
         display: flex;
         flex-direction: row-reverse;


     }
 </style>
 <div class="review_form field_form">
     <h5>Add a review</h5>
     <form class="row mt-3" id="postForm" action="{{ route('user.review.store') }}" method="POST">

         @csrf


         <div class="form-group col-12 mb-3 starrating risingstar ">
             {{-- <div class="star_rating">
                                                <span data-value="1"><i class="far fa-star"></i></span>
                                                <span data-value="2"><i class="far fa-star"></i></span>
                                                <span data-value="3"><i class="far fa-star"></i></span>
                                                <span data-value="4"><i class="far fa-star"></i></span>
                                                <span data-value="5"><i class="far fa-star"></i></span>
                                            </div> --}}


             <input type="radio" id="star5" name="rating" value="5" /><label for="star5"
                 title="5 star">5</label>
             <input type="radio" id="star4" name="rating" value="4" /><label for="star4"
                 title="4 star">4</label>
             <input type="radio" id="star3" name="rating" value="3" /><label for="star3"
                 title="3 star">3</label>
             <input type="radio" id="star2" name="rating" value="2" /><label for="star2"
                 title="2 star">2</label>
             <input type="radio" id="star1" name="rating" value="1" /><label for="star1"
                 title="1 star">1</label>

         </div>
         <div class="form-group col-12 mb-3">
             <textarea required="required" placeholder="Your review *" class="form-control" name="comment" rows="4"></textarea>
         </div>

         <div class="form-group col-12 mb-3">
             <button type="submit" id="savedata" class="btn btn-fill-out" value="Submit">Submit
                 Review</button>
         </div>
     </form>
 </div>
