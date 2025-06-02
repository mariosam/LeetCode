/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { distributeCandies } from './DistributeCandiesAmongChildrenII.js'

TEST('Starting DistributeCandiesAmongChildrenII test...', (t) => {
    //Test 1
    let want = 3
    let got = distributeCandies( 5, 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 10
    got = distributeCandies( 3, 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
