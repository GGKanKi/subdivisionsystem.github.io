document.addEventListener("DOMContentLoaded", () => {
    // User Complaint Toggle
    const concern = document.getElementById("concern"),
          complaint = document.getElementById("complaint");

    if (complaint && concern) {
        complaint.addEventListener("click", () => {
            if (concern.style.display === "block") {
                concern.style.display = "none";
            } else {
                concern.style.display = "block";
                concern.style.left = "320px";
            }
        });
    }

    // Service Reports/Complaints Toggle
    const service_report = document.getElementById("report_button"),
          service_report_box = document.getElementById("report_box"),
          service_report_close = document.getElementById("close_report");

    if (service_report && service_report_box && service_report_close) {
        service_report.addEventListener("click", () => {
            service_report_box.style.display = "block";
            service_report_box.style.left = "320px";
        });

        service_report_close.addEventListener("click", () => {
            service_report_box.style.display = "none";
            service_report_box.style.left = "1000px";
        });
    }

    // User Information Admin Side Toggle
    const user_info_btn = document.getElementById("users_info"),
          user_info_table = document.getElementById("crud");

    if (user_info_btn && user_info_table) {
        user_info_btn.addEventListener("click", () => {
            if (user_info_table.style.display === "block") {
                user_info_table.style.display = "none";
            } else {
                user_info_table.style.display = "block";
                user_info_table.style.zIndex = "110";
                user_info_table.style.left = "100px"; 
            }
        });
    }

    // User Accounts Table Toggle
    const add_user_button = document.getElementById("add_user"),
          user_accounts_table = document.getElementById("account_table");

    //checks if the const are not null
    if (add_user_button && user_accounts_table) {
        add_user_button.addEventListener("click", () => {
            //handles the event listener and create separate type of event
            if (user_accounts_table.style.display === "block") {
                user_accounts_table.style.display = "none";
            } else {
                user_accounts_table.style.display = "block";
                user_accounts_table.style.zIndex = "115";
                user_accounts_table.style.left = "100px";
            }
        });
    }

          
          

    // Notifications button 
    const notif = document.getElementById('notif'),
          notif_message = document.getElementById('notifications');

          if(notif && notif_message){
                notif.addEventListener('click', () =>{
                    console.log('Notif clicked');
                    if (notif_message.style.display === "block"){
                        console.log('Hiding notification');
                        notif_message.style.display = 'none';
                    } else {
                        notif_message.style.display = 'block';
                        notif_message.style.left = '380px';
                        notif_message.style.zIndex = '130';
                    }
                });
          }


    // Add Notif

    const add_notif_button = document.getElementById("add_announce"),
          add_notification = document.getElementById("add_notif");

          if (add_notif_button && add_notification){
            add_notif_button.addEventListener("click", ()=>{
                console.log('CLICKED');
                if (add_notification.style.display === "block"){
                    console.log('Hiding notification');
                    add_notification.style.display = 'none';
                } else {
                    add_notification.style.display = 'block';
                    add_notification.style.left = '380px';
                    add_notification.style.zIndex = '140';
                }

            });
          }

            
    // Checking of reports/Concerns
    const check_reports = document.getElementById('check_report_user'),
          report_user_table = document.getElementById('reports_user'),
          check_reports_service = document.getElementById('check_report_service'),
          report_service_table = document.getElementById('reports_service');
          

        if (check_reports && report_user_table){
            check_reports.addEventListener("click", ()=>{
                console.log('ABNOY');
            if(report_user_table.style.display === "block"){
                report_user_table.style.display = "none";
            } else {
                report_user_table.style.display = "block"
                report_user_table.style.left = "180px";
                report_user_table.style.zIndex = "145";
            }
            });

        if (check_reports_service && report_service_table){
            console.log('ABNOY');
            check_reports_service.addEventListener("click", ()=>{
            if (report_service_table.style.display === "block"){
                report_service_table.style.display = "none";
            } else {
                report_service_table.style.display = "block";
                report_service_table.style.left = "180px";
                report_service_table.style.zIndex = "146";
            }
            });

        }
    }
    
    // Log In Info
    const login_info_button = document.getElementById('login_info'),
          user_login_info = document.getElementById('account_info');

          if (login_info_button && user_login_info){
            login_info_button.addEventListener('click', ()=>{
                console.log('click');
                if (user_login_info.style.display === "flex"){
                    user_login_info.style.display = "none";
                } else {
                    user_login_info.style.display = "flex";
                    user_login_info.style.left = "100px";
                    user_login_info.style.zIndex = "105";
                }
            });
          }
        


    // Add User Page Toggle
    const add_user_db = document.getElementById("add_user_button"),
          add_user_page = document.getElementById("add_user_page"),
          close_add_user = document.getElementById("close_user_page");

        add_user_db.addEventListener("click", () => { 
            add_user_page.style.display = "flex";
            add_user_page.style.left = "380px";
            add_user_page.style.zIndex = "120";
        
        close_add_user.addEventListener("click", ()=> {
            add_user_page.style.display = "none";
            add_user_page.style.left = "-2000px"
        });
    });

});

