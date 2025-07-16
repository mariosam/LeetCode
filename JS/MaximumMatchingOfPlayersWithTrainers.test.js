/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { matchPlayersAndTrainers } from './MaximumMatchingOfPlayersWithTrainers.js'

TEST('Starting MaximumMatchingOfPlayersWithTrainers test...', (t) => {
    //Test 1
    let want = 2
    let got = matchPlayersAndTrainers([4,7,9], [8,2,5,8])
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = matchPlayersAndTrainers( [1,1,1], [10])
    t.assert( want === got, "Expect: "+want)

    t.end()
})
