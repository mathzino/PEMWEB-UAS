<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <style>
      * {
        margin: 0px;
      }
      a {
        display: block;
        border-radius: 0.25rem;
        color: #000000;
      }
    </style>
    <div style="display: flex; justify-content: center">
      <div style="width: 100vw; max-width: 28rem; background-color: #dbeafe; position: relative; border: 1px solid #adcec4 #cfcfcf">
        <div style="padding-left: 1.25rem; padding-right: 1.25rem; color: #dbeafe; padding-top: 0.5rem; padding-bottom: 0.5rem; font-weight: bold; display: flex; gap: 0.5rem; align-items: center">
          <div href="/shop">
            <svg width="20" height="13" viewBox="0 0 20 13" fill="#DBEAFE" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M3.0023e-09 6.50258C0.00167844 6.72498 0.0871314 6.93803 0.238333 7.09676L0.243333 7.10707L5.24333 12.259C5.4005 12.4154 5.611 12.5019 5.8295 12.5C6.048 12.498 6.25701 12.4077 6.41152 12.2485C6.56602 12.0893 6.65366 11.8739 6.65556 11.6488C6.65746 11.4237 6.57347 11.2068 6.42167 11.0448L2.845 7.35779H19.1667C19.3877 7.35779 19.5996 7.26733 19.7559 7.1063C19.9122 6.94527 20 6.72687 20 6.49914C20 6.27141 19.9122 6.05301 19.7559 5.89198C19.5996 5.73096 19.3877 5.64049 19.1667 5.64049H2.845L6.42167 1.95516C6.57347 1.79322 6.65746 1.57632 6.65556 1.35119C6.65366 1.12605 6.56602 0.910693 6.41152 0.751493C6.25701 0.592292 6.048 0.501989 5.8295 0.500032C5.611 0.498076 5.4005 0.584623 5.24333 0.741033L0.243333 5.89293L0.238333 5.90152C0.164147 5.97897 0.105278 6.07054 0.0650001 6.17114C0.0221002 6.27484 -9.40675e-06 6.38641 3.0023e-09 6.49914V6.50258Z"
                fill="#3b82f6"
              />
            </svg>
          </div>
        </div>
        <!-- {/* notif dll */} -->
        <div className="px-5 py-4" style="padding-left: 1.25rem; padding-right: 1.25rem; padding-top: 1rem; padding-bottom: 1rem">
          <!--seler section   -->
          <div className="">
            <p style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 126.02%; color: #7b7b7b">Anda Ingin Menjual?</p>
            <div style="margin-top: 0.5rem">
              <div style="display: flex; justify-content: space-between">
                <div style="width: 6rem; height: 1.75rem; background-color: #dbeafe; border-radius: 1.125rem">
                  <a href="/seller" style="background: #3b82f6; padding: 16px 6px; text-align: center; border-radius: 24px">
                    <p style="font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 126.02%; color: white; text-decoration: none">Klik disini</p>
                  </a>
                </div>
                <div className=" flex gap-2" style="display: flex; gap: 0.5rem">
                  <!--  -->
                  <a href="/cart">
                    <div style="border-color: #adcec4; padding: 0.5rem; width: fit-content; border-radius: 9999px; border: 1px solid #adcec4; display: flex; align-items: center; justify-content: center; position: relative">
                      <div
                        className="h-3 w-3  bg-[#FB7777] rounded-full absolute right-[6px] top-[5px] text-[8px] text-white text-center"
                        style="height: 0.75rem; width: 0.75rem; background-color: #fb7777; border-radius: 9999px; position: absolute; right: 6px; top: 5px; font-size: 8px; color: #ffffff; text-align: center"
                      >
                        10
                      </div>
                      <svg width="21" height="20" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M15.3686 9.92513H4.74774L5.28102 8.86823L14.1416 8.85261C14.4412 8.85261 14.698 8.64435 14.7515 8.35627L15.9786 1.67299C16.0107 1.49771 15.9625 1.31722 15.8448 1.18012C15.7867 1.11264 15.7141 1.05829 15.6322 1.02083C15.5502 0.983371 15.4609 0.9637 15.3704 0.963183L4.09854 0.926738L4.00223 0.48593C3.94159 0.204785 3.6812 0 3.38513 0H0.629584C0.462608 0 0.302471 0.0645436 0.184401 0.179432C0.066331 0.29432 0 0.450143 0 0.612619C0 0.775096 0.066331 0.930918 0.184401 1.04581C0.302471 1.16069 0.462608 1.22524 0.629584 1.22524H2.87504L3.29595 3.17243L4.33218 8.05429L2.99811 10.1733C2.92882 10.2643 2.8871 10.3723 2.87764 10.4852C2.86818 10.5981 2.89138 10.7112 2.9446 10.8119C3.05161 11.0185 3.26742 11.1486 3.50641 11.1486H4.62646C4.38768 11.4572 4.25871 11.8331 4.25906 12.2194C4.25906 13.2017 5.07948 14 6.08895 14C7.09843 14 7.91885 13.2017 7.91885 12.2194C7.91885 11.8324 7.78687 11.4558 7.55144 11.1486H10.4247C10.1859 11.4572 10.0569 11.8331 10.0573 12.2194C10.0573 13.2017 10.8777 14 11.8872 14C12.8967 14 13.7171 13.2017 13.7171 12.2194C13.7171 11.8324 13.5851 11.4558 13.3497 11.1486H15.3704C15.7164 11.1486 16 10.8744 16 10.536C15.999 10.3737 15.932 10.2184 15.8137 10.1039C15.6954 9.98949 15.5354 9.92522 15.3686 9.92513ZM4.36072 2.13462L14.6303 2.1676L13.6243 7.6482L5.55746 7.66208L4.36072 2.13462ZM6.08895 12.7678C5.77862 12.7678 5.52536 12.5214 5.52536 12.2194C5.52536 11.9174 5.77862 11.671 6.08895 11.671C6.39929 11.671 6.65255 11.9174 6.65255 12.2194C6.65255 12.3649 6.59317 12.5043 6.48747 12.6072C6.38178 12.71 6.23843 12.7678 6.08895 12.7678ZM11.8872 12.7678C11.5769 12.7678 11.3236 12.5214 11.3236 12.2194C11.3236 11.9174 11.5769 11.671 11.8872 11.671C12.1975 11.671 12.4508 11.9174 12.4508 12.2194C12.4508 12.3649 12.3914 12.5043 12.2857 12.6072C12.18 12.71 12.0367 12.7678 11.8872 12.7678Z"
                          fill="#3B82F6"
                        />
                      </svg>
                    </div>
                  </a>
                  <a href="/cart">
                    <div style="border-color: #adcec4; padding: 0.5rem; width: fit-content; border-radius: 9999px; border: 1px solid #adcec4; display: flex; align-items: center; justify-content: center; position: relative">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M16.7344 15.75H16.2422V8.77734C16.2422 5.88369 14.1032 3.49248 11.3203 3.09463V2.29688C11.3203 1.84365 10.9532 1.47656 10.5 1.47656C10.0468 1.47656 9.67969 1.84365 9.67969 2.29688V3.09463C6.89678 3.49248 4.75781 5.88369 4.75781 8.77734V15.75H4.26562C3.90264 15.75 3.60938 16.0433 3.60938 16.4062V17.0625C3.60938 17.1527 3.6832 17.2266 3.77344 17.2266H8.20312C8.20312 18.4939 9.23262 19.5234 10.5 19.5234C11.7674 19.5234 12.7969 18.4939 12.7969 17.2266H17.2266C17.3168 17.2266 17.3906 17.1527 17.3906 17.0625V16.4062C17.3906 16.0433 17.0974 15.75 16.7344 15.75ZM10.5 18.2109C9.95654 18.2109 9.51562 17.77 9.51562 17.2266H11.4844C11.4844 17.77 11.0435 18.2109 10.5 18.2109ZM6.23438 15.75V8.77734C6.23438 7.63711 6.67734 6.5666 7.4833 5.76064C8.28926 4.95469 9.35977 4.51172 10.5 4.51172C11.6402 4.51172 12.7107 4.95469 13.5167 5.76064C14.3227 6.5666 14.7656 7.63711 14.7656 8.77734V15.75H6.23438Z"
                          fill="#3B82F6"
                        />
                      </svg>
                    </div>
                  </a>
                  <a href="/cart">
                    <div
                      className="p-2 w-fit rounded-full border  flex items-center justify-center relative"
                      style="border-color: #adcec4; padding: 0.5rem; width: fit-content; border-radius: 9999px; border: 1px solid #adcec4; display: flex; align-items: center; justify-content: center; position: relative"
                    >
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M7.65015 3.90833C7.65015 4.15533 7.74827 4.39221 7.92292 4.56686C8.09757 4.74152 8.33446 4.83964 8.58145 4.83964C8.82845 4.83964 9.06533 4.74152 9.23999 4.56686C9.41464 4.39221 9.51276 4.15533 9.51276 3.90833C9.51276 3.66133 9.41464 3.42445 9.23999 3.24979C9.06533 3.07514 8.82845 2.97702 8.58145 2.97702C8.33446 2.97702 8.09757 3.07514 7.92292 3.24979C7.74827 3.42445 7.65015 3.66133 7.65015 3.90833ZM7.65015 8.56487C7.65015 8.81187 7.74827 9.04875 7.92292 9.2234C8.09757 9.39806 8.33446 9.49617 8.58145 9.49617C8.82845 9.49617 9.06533 9.39806 9.23999 9.2234C9.41464 9.04875 9.51276 8.81187 9.51276 8.56487C9.51276 8.31787 9.41464 8.08099 9.23999 7.90633C9.06533 7.73168 8.82845 7.63356 8.58145 7.63356C8.33446 7.63356 8.09757 7.73168 7.92292 7.90633C7.74827 8.08099 7.65015 8.31787 7.65015 8.56487ZM7.65015 13.2214C7.65015 13.4684 7.74827 13.7053 7.92292 13.8799C8.09757 14.0546 8.33446 14.1527 8.58145 14.1527C8.82845 14.1527 9.06533 14.0546 9.23999 13.8799C9.41464 13.7053 9.51276 13.4684 9.51276 13.2214C9.51276 12.9744 9.41464 12.7375 9.23999 12.5629C9.06533 12.3882 8.82845 12.2901 8.58145 12.2901C8.33446 12.2901 8.09757 12.3882 7.92292 12.5629C7.74827 12.7375 7.65015 12.9744 7.65015 13.2214Z"
                          fill="#3B82F6"
                        />
                      </svg>
                    </div>
                  </a>
                  <!--  -->
                </div>
              </div>
              <div></div>
            </div>
          </div>
        </div>

        <div className="mt-4" style="margin-top: 1rem">
          <div style="width: 100%; height: 100vh; background-color: #ffffff; border-radius: 3rem">
            <div style="padding-left: 2rem; padding-right: 2rem; padding-top: 2.25rem; padding-bottom: 0.25rem; display: flex; flex-direction: column; gap: 1rem">
              <div style="display: flex; gap: 8px">
                <span
                  ><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1L1 6L6 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1 6H9C14.523 6 19 10.477 19 16V17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <p style="font-family: 'Inter'; font-style: normal; font-weight: 500; font-size: 24px; line-height: 29px; color: #4a4a4a; margin-bottom: 1rem">Rating</p>
              </div>
            </div>
            <!--  -->
            <!--  -->

            <!-- CARD RATING -->

            <div style="padding: 24px 36px">
              <div style="background: #ffffff; box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.1); border-radius: 8px; display: flex; gap: 20px; overflow: hidden">
                <div style="width: 114px; height: 98px; background-color: #bfbfbf; position: relative">
                  <img src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcR61F36y-FxJ1SuhuKrBUmJeQtWyklBOtf_QcqLNnziuboOyVCBPXjSiJsNqIQ_AIvd" style="object-fit: cover; width: 100%; height: 100%" alt="" />
                </div>
                <div style="display: flex; flex-direction: column; justify-content: center; padding: 8px 0">
                  <div style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 10px; line-height: 12px; color: #3b82f6; margin-top: 12px; margin-bottom: 7px">[Paket Sayur Sop], Wortel, Tomat, Bayam, Singkong</div>
                  <div style="font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 15px; color: #3b82f6">Rp 20.000</div>
                  <div
                    style="
                      font-family: 'Inter';
                      font-style: normal;
                      font-weight: 700;
                      font-size: 12px;
                      line-height: 15px;
                      color: #ffffff;
                      background-color: #3b82f6;
                      padding: 6px 12px;
                      border-radius: 10px;
                      width: 152px;
                      align-items: center;
                      display: flex;
                      margin-top: 6px;
                    "
                  >
                    Rating :
                    <div style="display: flex; gap: 3px">
                      <span
                        ><svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M7.66156 10.2352C7.73422 10.2739 7.8186 10.2867 7.89946 10.2727C8.10336 10.2375 8.24047 10.0442 8.20531 9.84026L7.66156 10.2352ZM7.66156 10.2352L5.00024 8.83597L2.33891 10.2352M7.66156 10.2352H2.33891M2.33891 10.2352C2.27704 10.2679 2.20725 10.2825 2.13746 10.2776M2.33891 10.2352L2.13746 10.2776M1.79516 9.84026L2.30375 6.87659L1.79516 9.84026ZM1.79516 9.84026C1.78323 9.9092 1.79086 9.98011 1.81718 10.0449M1.79516 9.84026L1.81718 10.0449M1.81718 10.0449C1.8435 10.1098 1.88746 10.1659 1.94407 10.207M1.81718 10.0449L1.94407 10.207M1.94407 10.207C2.00068 10.2481 2.06767 10.2726 2.13746 10.2776M1.94407 10.207L2.13746 10.2776M6.21823 3.92668L6.33454 4.16249L6.59473 4.2003L9.31936 4.59628L7.34768 6.51858L7.15946 6.70208L7.20392 6.96116L7.66956 9.67449L5.23292 8.39341L5.00024 8.27107L4.76755 8.39341L2.33091 9.67449L2.79655 6.96116L2.84101 6.70208L2.65279 6.51858L0.681114 4.59628L3.40574 4.2003L3.66593 4.16249L3.78224 3.92668L5.00024 1.45744L6.21823 3.92668Z"
                            fill="#FFD600"
                            stroke="#FFD600"
                          />
                        </svg>
                      </span>
                      <span>
                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M7.66156 10.2352C7.73422 10.2739 7.8186 10.2867 7.89946 10.2727C8.10336 10.2375 8.24047 10.0442 8.20531 9.84026L7.66156 10.2352ZM7.66156 10.2352L5.00024 8.83597L2.33891 10.2352M7.66156 10.2352H2.33891M2.33891 10.2352C2.27704 10.2679 2.20725 10.2825 2.13746 10.2776M2.33891 10.2352L2.13746 10.2776M1.79516 9.84026L2.30375 6.87659L1.79516 9.84026ZM1.79516 9.84026C1.78323 9.9092 1.79086 9.98011 1.81718 10.0449M1.79516 9.84026L1.81718 10.0449M1.81718 10.0449C1.8435 10.1098 1.88746 10.1659 1.94407 10.207M1.81718 10.0449L1.94407 10.207M1.94407 10.207C2.00068 10.2481 2.06767 10.2726 2.13746 10.2776M1.94407 10.207L2.13746 10.2776M6.21823 3.92668L6.33454 4.16249L6.59473 4.2003L9.31936 4.59628L7.34768 6.51858L7.15946 6.70208L7.20392 6.96116L7.66956 9.67449L5.23292 8.39341L5.00024 8.27107L4.76755 8.39341L2.33091 9.67449L2.79655 6.96116L2.84101 6.70208L2.65279 6.51858L0.681114 4.59628L3.40574 4.2003L3.66593 4.16249L3.78224 3.92668L5.00024 1.45744L6.21823 3.92668Z"
                            fill=""
                            stroke="#FFD600"
                          />
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--  -->
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
