import { HashRouter as Router, Routes, Route } from "react-router-dom";
import Home from "./components/pages/Home";
import Blog from "./components/pages/Blog";
import "./App.css";

function App() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/blog" element={<Blog />} />
      </Routes>
    </Router>
  );
}

export default App;
