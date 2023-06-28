class Chatbox {
    constructor() {
        this.args = {
            openButton: document.querySelector('.chatbox__button'),
            chatBox: document.querySelector('.chatbox___support'),
            sendButton: document.querySelector('.send__button')
        };
        

        this.state = false;
        this.message = [];
    }

    display() {
        const { openButton, chatBox, sendButton } = this.args;

        openButton.addEventListener('click', listener() => this.toggleState(chatBox))

        sendButton.addEventListener('click', listener() => this.onSendButton(chatBox))

        const node = chatBox.querySelector('input');
        node.addEventListener("keyup", listener({ key: string }) => {
            if(key === "Enter") {
            this.onSendButton(chatBox)
        }
    })

}

toggleState(chatBox){
    this.state = !this.state;

    //show or hide the box
    if (this.state) {
        chatBox.classList.add('chatbox--active')
    } else {
        chatBox.classList.remove(tokens: 'chatbox--active')
    }
}

onSendButton(chatBox){
    var textField = chatbox.querySelector('input');
    let text1 = textField.value
    if (text1 === "") {
        return;
    }

    let msg1 = { name: "User", message: text1 }
    this.message.push(msg1);

    fetch($SCRIPT_ROOT + '/predict', {
        method: 'POST',
        body: JSON.stringify({ message: text1 }),
        mode: 'cors',
        headers: {
            'Content-Type': 'application/json'
        },

    })
        .then(r => r.json())
        .then(r => {
            let msg2 = { name: "Curo", message: r.answer };
            this.messages.push(msg2)
            this.updateChatText(chatBox)
            textField.value = ''
        }).catch((error) => {
            console.error('Error:', error);
            this.updateChatText(chatBox)
            textField.value = ''
        });

    }

    updateChatText(chatBox){
        var html = '';
        this.message.slice().reverse().forEach(function(item, index:number){
            if (item.name === "Curo"){
                html += '<div class="messages__item messages__item--visitor">' + item.message + '</div>'
            }
            else{
                html += '<div class="messages__item messages__item--operator">' + item.message + '</div>'
            }
        });

        const chatmessage = chatbox.querySelector('.chatbox__messages');
        chatmessage.innerHTML = html;
    }

}

const chatbox = new Chatbox();
chatbox.display();