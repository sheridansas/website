import React from "react";
import "./App.css";
import Navigation from "./components/Navigation/Navigation";
import PageLanding from "./components/PageLanding/PageLanding";

function App() {
  return (
    <div className="App min-h-screen bg-slate-900">
      <Navigation />

      {/* TODO: Move to router when more pages are implemented. */}
      <div className="mx-auto max-w-5xl mt-4 p-0 max-lg:px-10">
        <PageLanding />
      </div>
    </div>
  );
}

export default App;
