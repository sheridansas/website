import React from "react";
import "./App.css";
import Navigation from "./components/Navigation/Navigation";
import PageLanding from "./components/PageLanding/PageLanding";

function App() {
  return (
    <div className="App min-h-screen bg-slate-900 max-lg:px-10">
      <Navigation />

      {/* TODO: Move to router when more pages are implemented. */}
      <div className="mx-auto max-w-5xl mt-16 p-0">
        <PageLanding />
      </div>
    </div>
  );
}

export default App;
