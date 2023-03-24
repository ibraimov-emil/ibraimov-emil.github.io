document.querySelectorAll('.root')
  .forEach(domContainer => {

	
let num = 1;
	
const Win = ({id, name, photo, prize }) => (

    <div className="glav">
		<div className="num">{num++}</div>
	<div className="photo"><img src ={photo} /></div>		
		<div className="wins-info">
            <div className="name">{name}</div>
			<div className="prize">Приз: {prize}₽</div>
		</div>
	<a href={id} target="_blank" className="contact"><img src ="image/vk.svg"/></a> 
    </div>

);

class App extends React.Component {
  constructor() {
    super();
    this.state = {
      wins: []
    };
  }

  componentWillMount() {
    axios
      .get("https://acaso.ru/lastwin.php")
      .then(({ data }) => {
        this.setState({
          wins: data
        });
      });
  }

  render() {
    return (
      <div className="lastwins">
		{this.state.wins.map((win) => (
          <Win
            id={win.id}
            name={win.name}
            photo={win.photo}
            prize={win.prize}
          />
        ))}
      </div>
    );
  }
}


		   
		   
ReactDOM.render(<App/>, domContainer);
  });

