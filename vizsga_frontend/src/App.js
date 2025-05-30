import logo from "./logo.svg";
import "./App.css";
import { TemakContext, TemakProvider } from "./context/TemakContext";
import Sor from "./components/Sor";

function App() {
  return (
    <div className="app-container">
      <p>Szótár</p>
      <h3>Szavak</h3>
      <header className="app-header"></header>
      <nav className="app-menu">
        <select name="tema" id="temak" form="temaform">
          <option value="tema">Válassz témát!</option>
          <option value="kinezet"><TemakProvider /></option>
        </select>
      </nav>
      <main className="app-main">
        <table>
          <tr>
            <th>ANGOL</th>
            <th>MAGYAR</th>
            <th>visszajelzés</th>
          </tr>
          <tr>
            <td><Sor/></td>
          </tr>
        </table>
      </main>
      <footer></footer>
    </div>
  );
}

export default App;
