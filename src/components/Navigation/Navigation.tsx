import { faDiscord, faGithub } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import React, { FC } from "react";

interface NavigationProps {}

const Navigation: FC<NavigationProps> = () => (
  <div>
    <header className="text-white ubuntu-mono-bold">
      <div className="flex items-center justify-between px-6 py-4 mx-auto max-w-4xl">
        <div className="flex items-center space-x-3 text-xl font-semibold">
          <img src="/sas.png" alt="SAS Logo" className="w-10 h-10" />

          {/* Large-sized screens */}
          <div className="hidden lg:inline">
            Sheridan Server Administration Society
          </div>

          {/* Medium-sized screens */}
          <div className="hidden md:inline lg:hidden">Sheridan SAS</div>

          {/* Small-sized screens */}
          <div className="inline md:hidden">SAS</div>
        </div>
        <div className="flex items-center space-x-4">
          <a
            href="https://discord.com"
            target="_blank"
            className="hover:text-indigo-400"
            rel="noreferrer"
          >
            <FontAwesomeIcon icon={faDiscord} size="lg" />
          </a>
          <a
            href="https://github.com"
            target="_blank"
            className="hover:text-gray-400"
            rel="noreferrer"
          >
            <FontAwesomeIcon icon={faGithub} size="lg" />
          </a>
        </div>
      </div>
    </header>
  </div>
);

export default Navigation;
