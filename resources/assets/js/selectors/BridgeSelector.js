import {createSelector} from 'reselect';

const bridges = (state) => state.bridges ? state.bridges.data : state.data;

export const getBridge = (id) => createSelector(
    [bridges],
    (bridges) => {
        return bridges.find(bridge => bridge.id === id)
    }
);

export const getBridges = createSelector(
    [bridges],
    (bridges) => bridges
);