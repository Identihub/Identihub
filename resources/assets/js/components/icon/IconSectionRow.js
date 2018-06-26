import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import Section from '../Section';
import IconCard from './IconCard';
import {updateOrderOnIcon, updateSectionOnIcon} from '../../reducers/Extra/ExtraActions';
import {reorderElement, changeSection, reorder} from '../../reducers/Bridge/BridgeApiCalls';
import {SortableContainer, arrayMove} from 'react-sortable-hoc';

const IconsList = SortableContainer(({icons, section, bridge}) => {
    return (
        <div className="element-list">
            {
                icons.filter(icon => (icon.section_id === section.id)).sort((a, b) => (a.order - b.order)).map(icon => {
                    return (
                        <IconCard
                            key={icon.id}
                            index={icon.order}
                            listId={icon.section_id}
                            card={icon}
                            bridge={bridge}/>
                    )
                })
            }
        </div>)
});

class IconSectionRow extends Component {

    state = {
        icons: [],
        isActive: false
    };

    componentWillMount() {
        this.updateLocalState(this.props);
    }

    updateLocalState = (props) => {
        this.setState({
            icons: props.icons
        });
    };

    /*
        pushCard = (card) => {
            const {
                bridge,
                section,
                updateSectionOnIcon,
                changeSection
            } = this.props;
            updateSectionOnIcon(bridge.id, card.id, section.id);
            changeSection('icon', card.id, section.id);
        };
    */

    onSortEnd = ({oldIndex, newIndex}) => {
        let newOrderedIcons = arrayMove(this.state.icons, oldIndex, newIndex);

        this.setState({
            icons: newOrderedIcons,
            isActive: false,
        });

        this.props.updateOrderOnIcon(this.props.bridge, newOrderedIcons);
        this.props.reorder('icon', this.props.bridge.id, newOrderedIcons);
    };

    onSortStart = () => {
        this.setState({
            isActive: true,
        });
    };

    render() {
        const {
            bridge,
            section,
            emptyStateText,
        } = this.props;

        return (
            <div>
                <Section
                    bridge={bridge}
                    section={section}
                    isActive={this.state.isActive}
                    emptyStateText={emptyStateText}>

                    <IconsList icons={this.state.icons}
                               section={section}
                               bridge={bridge}
                               axis="x"
                               lockAxis="x"
                               pressThreshold="25"
                               onSortEnd={this.onSortEnd}
                               onSortStart={this.onSortStart}/>

                </Section>
            </div>);
    }
}

IconSectionRow.propTypes = {
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired,
    section: PropTypes.shape({
        id: PropTypes.number,
        order: PropTypes.number,
        title: PropTypes.string,
        description: PropTypes.string
    }).isRequired,
    icons: PropTypes.arrayOf(PropTypes.shape({
        id: PropTypes.number,
        section_id: PropTypes.number,
        order: PropTypes.number
    })).isRequired,
    emptyStateText: PropTypes.string.isRequired
};

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        updateOrderOnIcon,
        // updateSectionOnIcon,
        reorder,
        // changeSection
    }, dispatch)
};

export default connect(state => state, dispatchToProps)(IconSectionRow);