import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { getSectionType } from '../../reducers/SectionType/SectionTypeReducer';
import { sortWithSectionAndOrder } from '../../helpers';

class IconViewerSection extends Component{

    constructor(props) {
        super(props);
    }

    render() {

        const { iconsSection, bridge } = this.props;

        if(!iconsSection)
            return(<div> </div>);

        const sortedIcons = sortWithSectionAndOrder(bridge.icons, bridge.sections, iconsSection);

        return(
            <div>

            </div>
        );
    }

}

const mapStateToProps = (state, _) => {
    return {
        iconsSection: getSectionType(state, "ICONS")
    };
};

IconViewerSection.propTypes = {
    iconsSection: PropTypes.shape({
        id: PropTypes.number
    }),
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired
};

export default connect(mapStateToProps)(IconViewerSection);