var Component = React.createClass({
  render: function() {
    return React.DOM.span(null, "Hello " + this.props.name);
  }
});



ReactDOM.render(
	React.createElement(Component,{
        name: ,
    }),
	document.getElementById("app")
);

/*
var ComponentFactory = React.createFactory(Component);

ReactDOM.render(
  ComponentFactory(),
  document.getElementById("app")
);*/