eLearnCommerce.Component[ 'ecp-hello-world' ] = {

  container : {},
  configuration : {
    template : 'primary',
    message  : ''
  },

  Init : function( container ) {
    this.container = container;

    if( typeof container.attr( 'data-ec-component-args' ) !== "undefined" ) {
      this.configuration = ec_parse_args( JSON.parse( container.attr( 'data-ec-component-args' ) ), this.configuration );

      container.removeAttr( 'data-ec-component-args' );
    }

    this.container.attr( 'data-ec-component-template', this.configuration.template );

    this._loadTemplate();
  },

  _loadTemplate : function() {
    let args = ec_clone_object( this.configuration );

    if( typeof args.message === "undefined" || args.message === '' )
      args.message = eLearnCommerce.lang.ecp_hello_message;

    eLearnCommerce.Template.load( this.container, 'ecp-hello-world', 'template/default.html', args );
  }

};
