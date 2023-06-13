
<a href="./notifyDetail.php?id_transaction=<?php echo $cardInformation['id_transaction'] ?>" style="padding: 24px 36px; cursor:pointer">
    <div style="background: #ffffff; box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 16px; display: flex; gap: 20px">
        <div style="width: 88px; height: 88px; border-radius: 100%; background-color: #cbcbcb; position: relative; overflow: hidden">
            <img style="object-fit: cover; width: 100%; height: 100%" src="<?php echo $cardInformation['image_profile'] ?>" alt="<?php echo $cardInformation['image_profile'] ?>" />
        </div>
        <div>
            <div style="display: flex; gap: 4px; align-items: center">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M22.5 8.01001L21 3.51001C20.9479 3.35478 20.8463 3.22089 20.7109 3.1288C20.5754 3.03671 20.4136 2.99148 20.25 3.00001H3.75005C3.5865 2.99148 3.42465 3.03671 3.28922 3.1288C3.15379 3.22089 3.05223 3.35478 3.00005 3.51001L1.50005 8.01001C1.48924 8.08965 1.48924 8.17038 1.50005 8.25001V12.75C1.50005 12.9489 1.57906 13.1397 1.71972 13.2803C1.86037 13.421 2.05114 13.5 2.25005 13.5H3.00005V21H4.50005V13.5H9.00005V21H21V13.5H21.75C21.949 13.5 22.1397 13.421 22.2804 13.2803C22.421 13.1397 22.5 12.9489 22.5 12.75V8.25001C22.5109 8.17038 22.5109 8.08965 22.5 8.01001ZM19.5 19.5H10.5V13.5H19.5V19.5ZM21 12H18V9.00001H16.5V12H12.75V9.00001H11.25V12H7.50005V9.00001H6.00005V12H3.00005V8.37001L4.29005 4.50001H19.71L21 8.37001V12Z"
                    fill="#618D80" />
                </svg>
                <div  style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 19px; color: #618d80">
                    <?php echo $cardInformation['name'] ?>
                </div>
            </div>
            <div style="font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #618d80; margin-top: 12px; margin-bottom: 7px">Rp <?php echo $cardInformation['price'] * $cardInformation['qt'] ?>
            </div>
            <div style="display: flex; gap: 8px">
                <div style="padding: 6px 8px; border-radius: 8px; font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 15px; color: #000000; background-color: #3b82f6">
                        Diterima Penjual
                </div>
            </div>
        </div>
    </div>
</a>
                                                                                        