( function( $ ) {
    var emojioneareaItemView = elementor.modules.controls.BaseData.extend({
        onReady: function () {
            console.log('READY')
            var self = this,
                options = _.extend({
                    events: {
                        change: () => self.saveValue(),
                        emojibtn_click: () => self.saveValue(),
                        keyup: () => self.saveValue()
                    },
                }, this.model.get('is_featured'));
    
            this.ui.textarea.emojioneArea(options);
    
        },
    
        saveValue: function () {
            this.setValue(this.ui.textarea[0].emojioneArea.getText());
        },
    
        onBeforeDestroy: function () {
            this.saveValue();
            this.ui.textarea[0].emojioneArea.off();
        }
    });
    
    elementor.addControlView('emojionearea', emojioneareaItemView);
} )