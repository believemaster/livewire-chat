<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="chat_list_header">
        <div class="title">
            Chat
        </div>
        <div class="img_container">
            <img src="https://picsum.photos/id/237/200/300" alt="" srcset="">
        </div>
    </div>

    <div class="chat_list_body">
        <div class="chatlist_item">
            <div class="chatlist_img_container">
                <img src="https://picsum.photos/id/200/200/300" alt="" srcset="">
            </div>

            <div class="chatlist_info">
                <div class="top_row">
                    <div class="list_username">{{ Auth::user()->name }}</div>
                    <span class="date">2 Days ago</span>
                </div>
                <div class="bottom_row">
                    <div class="message_body text-truncate">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quam illo atque, ex ipsam
                        soluta. Beatae saepe iste, architecto alias, sapiente cum quo laborum obcaecati corporis fuga
                        soluta minus voluptas!
                    </div>
                    <div class="unread_count">56</div>
                </div>
            </div>
        </div>
    </div>
</div>
