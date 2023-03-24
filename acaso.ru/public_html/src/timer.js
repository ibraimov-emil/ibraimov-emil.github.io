

	

/*
const Win = ({id}) => (

    <div className="time">
		<div className="sec">{id}</div>
    </div>

);

class App extends React.Component {
  constructor() {
    super();
    this.startTimer = this.startTimer.bind
    this.state = {
      date: [],
      day: 0,
      min: 0,
      sec: 0
    };
  } 
    



  componentWillMount() {
    axios
      .get("https://acaso.ru/datePrize.php")
      .then(({ data }) => {
        this.setState({
          date: data
        });
      });
  }

 timer () {
    let secondsToDay = Math.floor(new Date().getTime()/1000);
    this.setState({ 
        sec: 2
    })
 }
	setInterval(timer, 1000);

  render() {
    return (
      <div className="timerReact">
          <Win
            id={this.state.sec}
          />
      </div>
    );
  }     
}


ReactDOM.render(<App/>, document.getElementById("timer"));
	   

*/

