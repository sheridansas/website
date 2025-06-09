import React, { FC } from "react";

interface PageLandingProps {}

const PageLanding: FC<PageLandingProps> = () => (
  <div className="jetbrains-mono text-slate-200">
    <h2 className="ubuntu-mono text-3xl">Awaiting branding guidelines!</h2>
    <p>This boilerplate until further programming can be completed.</p>

    <br />

    <a
      href="https://discord.gg/34N74gyCfx"
      target="_blank"
      rel="noreferrer"
      className="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-md"
    >
      Join the Discord
    </a>
  </div>
);

export default PageLanding;
