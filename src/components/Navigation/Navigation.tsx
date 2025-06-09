import { faDiscord, faGithub } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import React, { FC } from "react";

interface NavigationProps {}

const Navigation: FC<NavigationProps> = () => (
  <div>
    <header className="text-white ubuntu-mono max-lg:px-10">
      <div className="flex items-center justify-between pt-4 mx-auto max-w-5xl">
        <div className="flex items-center space-x-3 text-2xl">
          <div className="hidden lg:inline">
            Sheridan Server Administration Society
          </div>

          <div className="hidden md:inline lg:hidden">
            Sheridan Server Society
          </div>

          <div className="inline md:hidden">Sheridan SAS</div>
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
    <hr className="border-slate-800 mt-5" />
  </div>
);

export default Navigation;
