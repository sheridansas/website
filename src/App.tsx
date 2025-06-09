import React from "react";
import "./App.css";
import Navigation from "./components/Navigation/Navigation";
import PageLanding from "./components/PageLanding/PageLanding";

function App() {
  return (
    <div className="App min-h-screen bg-slate-900">
      <Navigation />

      {/* TODO: Move to router when more pages are implemented. */}
      <div className="mx-auto max-w-4xl mt-24 max-lg:mx-5">
        <PageLanding />
      </div>
    </div>
  );
}

export default App;
