

import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import { createSection, deleteSection } from '../reducers/Bridge/BridgeApiCalls';
import { isPublic } from '../helpers';

class SectionWrapper extends Component {

    constructor(params) {
        super(params);
        this.createSection = this.createSection.bind(this);
    }

    createSection() {
      const {
        bridge,
        sectionType,
        createSection
      } = this.props;
      createSection(bridge.id, sectionType.id);
    }



    render() {
        const {
            title,
            addResource,
            onResourceClick ,
            canCreateSection,
            children,
            bridge,
            section
        } = this.props;

        const { createSection } = this;

        function isSectionAvailable() {
          for(var key in bridge) {
            if(key == title.toLowerCase()) {
              return bridge[key].length ? true : false)
                
            }
          }
        }

        const isPub = isPublic();

        let plusIcon = null;
        let tooltip = null;
        if(!isPub){
          plusIcon = ( <img src="/images/plus.svg" width="19" height="19" /> );
          tooltip = (
            <div className="tooltip">
              <ul>
                <li onClick={ onResourceClick }>{ addResource }</li>
                {
                  canCreateSection ? <li onClick={ createSection }>Add new section</li> : ''
                }
              </ul>
            </div>
          );
        }

        if(isPub && !isSectionAvailable()) {
          return (<div></div>);
          }else{
            return (
                <div className="bridge-section">

                    <div className="title">
                        <h2>{ title }</h2>
                        { plusIcon }
                        { tooltip }
                    </div>

                    { children }

                </div>
              );
          }


    }

}

SectionWrapper.propTypes = {
    title: PropTypes.string.isRequired,
    addResource: PropTypes.string.isRequired,
    onResourceClick: PropTypes.func.isRequired,
    sectionType: PropTypes.shape({
        id: PropTypes.number
    }).isRequired,
    bridge: PropTypes.shape({
        id: PropTypes.number
    }).isRequired,
    canCreateSection: PropTypes.bool
};

export const dispatchToProps = (dispatch) => {
  return bindActionCreators({
    createSection
  }, dispatch)
};

export default connect(state => state, dispatchToProps)(SectionWrapper);
